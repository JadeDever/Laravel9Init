#!/bin/bash

# 刷新 composer
rm -rf vendor/composer/autoload_*
composer dumpautoload
