#!/bin/bash


php artisan migrate:fresh --seed

# rm -r -f storage/app/public/schedulelesson/
# rm -r -f storage/app/public/coursematerial/

# php artisan aetherupload:groups

# php artisan aetherupload:build
# php artisan aetherupload:clean

chmod -R 777 storage
chmod -R 777 storage/logs/
chmod -R 777 bootstrap/cache

composer install
#php artisan config:cache
