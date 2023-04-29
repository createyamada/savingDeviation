# ベースとなるイメージを指定
FROM php:8-alpine

# 作業ディレクトリを指定
WORKDIR /app

# 必要なパッケージをインストール
RUN apk update && apk add --no-cache libzip-dev zip
RUN docker-php-ext-install pdo_mysql zip

# Composerをインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# LaravelプロジェクトをコピーしてComposerパッケージをインストール
COPY . /app
RUN composer install --no-dev --prefer-dist --no-interaction --optimize-autoloader
ENV E_STAT_TABLE_DATA_URL http://api.e-stat.go.jp/rest/3.0/app/json/getStatsList?
ENV E_STAT_DATA_URL http://api.e-stat.go.jp/rest/3.0/app/json/getStatsData?
ENV E_STAT_APP_KEY c2a6b54812055fac2c46df210b860879a375f623

# ポートを公開
EXPOSE 80

# エントリーポイントを指定
ENTRYPOINT ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]