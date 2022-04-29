FROM php:7.4-apache

LABEL maintainer="DaKa"
ENV TZ=America/Bogota

WORKDIR /var/www/html
COPY ./portafolio.conf /etc/apache2/sites-available/000-default.conf
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime  \
    && a2enmod rewrite \
    && echo $TZ > /etc/timezone \
    && apt-get update && apt install -y \
    curl \
    libcap2-bin \
    nano \
    wget \
    zlib1g-dev \
    libicu-dev \
    libpng-dev \
    libxml2-dev \
    libpq-dev \
    libzip-dev \
    &&docker-php-ext-install pdo pdo_pgsql \
    && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install zip \
    && php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer \
    && apt-get install
COPY . /var/www/html
COPY .env.example .env
RUN  composer install
RUN  chmod -R ug+rwx storage bootstrap/cache \
    && chgrp -R www-data storage bootstrap/cache \
    && php artisan storage:link
