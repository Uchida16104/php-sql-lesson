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
        nginx \
        httpd \
        php8.1-intl \
        php8.1-mbstring \
        php8.1-mysql \
        php8.1-gd \
        php8.1-fpm \
        php8.1-mysqlnd \
        php8.1-xmlrpc \
        libapache2-mod-php \
        wget \
        tar \
        mysql-client \
        mysql-server \
        libcppdb-odbc0 \
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
        kotlin \
        swift \
        default-jdk \
        coffeescript \
        gnucobol \
        elixir \
        clisp \
        glslang-tools \
        groovy \
        ghc \
        julia \
        perl \
        scala \
        vint \
        nmap \
        musescore \
        powershell \
        processing \
        plugdata \
        unity \
        supercollider \
        sonic-pi \
        google-chrome-stable \
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
