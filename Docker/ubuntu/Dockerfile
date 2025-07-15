FROM php:8.1-apache

ENV DEBIAN_FRONTEND=noninteractive

WORKDIR /var/www/html

RUN apt-get update && \
    apt-get install -y \
        libpq-dev \
        libonig-dev \
        libzip-dev \
        unzip \
        libcurl4-openssl-dev \
        libssl-dev \
        php-dev \
        php-pear \
        vim \
        wget \
        tar \
        mysql-client \
        python3 \
        python3-mysqldb \
        gcc \
        make \
        zlib1g-dev \
        ruby-full \
        rustc \
        npm \
        nodejs \
        typescript \
        golang \
        default-jdk \
        elixir \
        clisp \
        glslang-tools \
        groovy \
        ghc \
        julia \
        perl \
        scala \
        nmap \
        musescore \
        powershell \
    && docker-php-ext-install pdo pdo_mysql mysqli \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY ca.pem /etc/ssl/certs/ca.pem

COPY php.ini /usr/local/etc/php/

ENV wpdl=https://wordpress.org/latest-ja.tar.gz

RUN wget -O - $wpdl | tar xzfv - && \
    mv wordpress/* /var/www/html/ && \
    chown -R www-data:www-data /var/www/html && \
    chmod 2775 /var/www/html

COPY ../../index.php /var/www/html/index.php

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

EXPOSE 80

CMD ["apache2-foreground"]
