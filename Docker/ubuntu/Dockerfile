FROM php:8.1-apache

ENV DEBIAN_FRONTEND=noninteractive
WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    default-mysql-client \
    sqlite3 libsqlite3-dev \
    libpq-dev \
    libonig-dev \
    libzip-dev \
    unzip \
    libcurl4-openssl-dev \
    libssl-dev \
    wget \
    tar \
    php-pear \
    && docker-php-ext-install pdo pdo_mysql mysqli pdo_pgsql pdo_sqlite mbstring \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY ca.pem /etc/ssl/certs/ca.pem

COPY php.ini /usr/local/etc/php/

COPY ../../index.php /var/www/html/index.php

EXPOSE 80

CMD ["apache2-foreground"]
