FROM php:8.0-fpm

RUN apt update \
&& apt install -y zlib1g-dev g++ git libicu-dev zip libzip-dev zip \
&& docker-php-ext-install intl opcache pdo pdo_mysql \
&& pecl install apcu \
&& docker-php-ext-enable apcu \
&& docker-php-ext-configure zip \
&& docker-php-ext-install zip

COPY ./app /usr/src/myapp
WORKDIR /usr/src/myapp