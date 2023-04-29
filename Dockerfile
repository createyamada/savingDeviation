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

# ポートを公開
EXPOSE 8000

# エントリーポイントを指定
ENTRYPOINT ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]