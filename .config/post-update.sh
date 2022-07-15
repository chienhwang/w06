#!/bin/sh

php artisan migrate:fresh --seed --force

mkdir -p storage/logs
touch storage/logs/laravel.log
