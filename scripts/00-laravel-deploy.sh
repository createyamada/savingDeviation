#!/usr/bin/env bash
echo "Running composer"
composer composer self-update --2
composer global require hirak/prestissimo
composer --version
composer install --no-dev --working-dir=/var/www/html


echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

php artisan serve

# echo "Running migrations..."
# php artisan migrate --force