#!/bin/bash
set -e

echo "Deployment started ..."

# Enter maintenance mode or return true
# if already is in maintenance mode
(php artisan down) || true

# Pull the latest version of the app
git fetch origin main

# Reset to the latest version
git reset --hard origin/main

# Install composer dependencies
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Clear the old cache
php artisan clear-compiled

# Clear the old view cache
php artisan view:clear

# Recreate cache
php artisan optimize

php artisan config:cache
php artisan event:cache
php artisan route:cache
php artisan view:cache

# Compile npm assets
/home/viking/bin/pnpm install

# Compile npm assets
/home/viking/bin/pnpm run build

# Run database migrations
php artisan migrate --force

# Exit maintenance mode
php artisan up

echo "Deployment finished!"
