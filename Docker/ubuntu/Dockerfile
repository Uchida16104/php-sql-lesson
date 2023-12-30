FROM ubuntu/apache2
EXPOSE 80
WORKDIR /var/www/html
RUN apt update -y && apt install -y vim httpd nginx libonig-dev php8.1 php8.1-intl php8.1-mbstring php8.1-mysql php8.1-gd php8.1-fpm php8.1-mysqlnd php8.1-xmlrpclibapache2-mod-php wget tar wpdl mysql-client mysql-server libcppdb-odbc0　python3 python3-mysqldb gcc make libssl-dev zlib1g-dev ruby-full && apt-get install build-essential procps epel-release curl file git nodejs npm && update-alternatives --install /usr/bin/node node /usr/bin/nodejs && ufw app list && ufw allow 'Nginx HTTP' && ufw status && systemctl status nginx && curl -4 icanhazip.com
RUN sudo apt-get update && sudo apt-get install xsltproc && sudo apt-get install -y nmap
ENV wpdl https://wordpress.org/latest-ja.tar.gz
RUN cd /var/www/html && wget -O - $wpdl | tar xzfv -
RUN mv /var/www/html/wordpress/* /var/www/html
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xzvf latest.tar.gz
RUN mv /wordpress/* /var/www/html
RUN chown -R apache:apache /var/www/html
RUN chmod 2775 /var/www/html
FROM buildpack-deps:stable-scm
RUN <<EOF
        /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
        eval "$(/home/linuxbrew/.linuxbrew/bin/brew shellenv)"
EOF
RUN apt-get update
ADD php.ini etc/php/8.1/apache2
RUN wget http://pecl.php.net/get/PDO_MYSQL-1.0.2.tgz
RUN tar xvf PDO_MYSQL-1.0.2.tgz
RUN cd PDO_MYSQL-1.0.2
RUN apt install -y php-dev
RUN sudo nmap -A -O -PR -R -sS -sU -sV -T5 localhost/8 -oX scan.xml & sudo xsltproc scan.xml -o scan.html
COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY index.html /var/www/html/index.html
CMD ["/usr/sbin/httpd", "-D", "FORGROUND"]
