#!/bin/sh
set -e

PORT="${PORT:-10000}"

# Jalankan migration database
php artisan migrate --force

# Masukkan data awal wahana
php artisan db:seed --class=WahanaSeeder --force

# Atur port Apache
sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf

sed -i "s/<VirtualHost \*:80>/<VirtualHost *:${PORT}>/" \
    /etc/apache2/sites-available/000-default.conf

# Jalankan Apache
exec apache2-foreground