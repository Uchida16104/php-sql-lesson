FROM ubuntu/apache2

EXPOSE 80

WORKDIR /var/www/html

RUN apt update -y && apt install -y vim
RUN apt -y install php8.1 php8.1-intl php8.1-mbstring php8.1-mysql php8.1-gd php8.1-fpm
RUN apt -y install libapache2-mod-php

ADD ./php/php.ini /etc/php/8.1/apache2

COPY --from=composer /usr/bin/composer /usr/bin/composer
