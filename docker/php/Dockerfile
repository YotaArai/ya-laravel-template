FROM php:7.2-fpm
COPY php.ini /usr/local/etc/php/

# install composer
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer
RUN apt-get update \
    && apt-get install -y git zip unzip vim libpq-dev libfreetype6-dev libjpeg62-turbo-dev libpng-dev

RUN docker-php-ext-install pdo_pgsql

RUN pecl install xdebug-2.9.8 && \
    docker-php-ext-enable xdebug

RUN pecl install redis && \
    docker-php-ext-enable redis

WORKDIR /var/www/html