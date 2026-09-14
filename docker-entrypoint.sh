#!/bin/bash
set -e

# Create sqlite database if DB_CONNECTION is sqlite and database does not exist
if [ "$DB_CONNECTION" = "sqlite" ] || [ -z "$DB_CONNECTION" ]; then
    mkdir -p /var/www/html/database
    touch /var/www/html/database/database.sqlite
    chown -R www-data:www-data /var/www/html/database
fi

# Generate app key if not set
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force
fi

# Run migrations and seed data
php artisan migrate --force || true
php artisan db:seed --force || true

# Cache configs
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

exec apache2-foreground
