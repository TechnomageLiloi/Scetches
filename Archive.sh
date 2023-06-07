#!/usr/bin/env bash

cd Application
dirVendor="$(pwd)/vendor"
if [[ -d "$dirVendor" ]]
then
  rm -r vendor
fi
composer install
cd ..
php Archive.php