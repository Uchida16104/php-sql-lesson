FROM ubuntu/apache2
EXPOSE 80
WORKDIR /var/www/html
RUN apt update -y && apt install -y vim php-dev php8.1 php8.1-intl php8.1-mbstring php8.1-mysql php8.1-gd php8.1-fpm libapache2-mod-php wget tar mysql-client mysql-server libcppdb-odbc0 gcc make libssl-dev zlib1g-dev ruby-full && apt-get install build-essential procps curl file git nodejs npm && update-alternatives --install /usr/bin/node node /usr/bin/nodejs
FROM buildpack-deps:stable-scm
RUN <<EOF
        /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
        eval "$(/home/linuxbrew/.linuxbrew/bin/brew shellenv)"
EOF
RUN apt-get update
RUN apt install -y python3 python3-mysqldb
RUN wget http://pecl.php.net/get/PDO_MYSQL-1.0.2.tgz
RUN tar xvf PDO_MYSQL-1.0.2.tgz
RUN cd PDO_MYSQL-1.0.2
ADD ./php/php.ini /etc/php/8.1/apache2
COPY --from=composer /usr/bin/composer /usr/bin/composer