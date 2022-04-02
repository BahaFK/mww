FROM php:7.4-fpm

RUN apt-get update

RUN apt-get install -y libzip-dev zlib1g-dev git libicu-dev libxml2-dev libpng-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install zip xml gd\
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && docker-php-ext-enable pdo_mysql

RUN curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer
RUN chown -R www-data:www-data /var/www
# Set timezone
RUN rm /etc/localtime
RUN ln -s /usr/share/zoneinfo/Europe/Berlin /etc/localtime
RUN "date"


RUN 	pecl install mongodb\
          && docker-php-ext-enable mongodb
#RUN apt-get update && apt-get install -y software-properties-common && add-apt-repository -y ppa:alex-p/tesseract-ocr
#RUN apt-get update && apt-get install -y tesseract-ocr-eng
RUN apt install -y tesseract-ocr tesseract-ocr-eng tesseract-ocr-osd
# RUN php bin/console doctrine:mapping:import "App\Entity" annotation --path=src/Entity
# RUN php bin/console make:entity --regenerate App

WORKDIR /var/www/symfony
#RUN ["chmod", "+x", "/var/www/symfony/docker/php-fpm/database-connect.sh"]
