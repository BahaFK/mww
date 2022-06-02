#!/usr/bin/env bash

if [[ -d /var/www/symfony/vendor ]]
then
    /usr/bin/composer install
fi
until [ `php /var/www/symfony/docker/php-fpm/DatabaseConnection.php` ]; do
  echo "wait for  database connection"
    sleep 2
done
php bin/console doctrine:schema:update --force
#php bin/console doctrine:fixtures:load -n
cd /var/www/symfony
exec php-fpm -F