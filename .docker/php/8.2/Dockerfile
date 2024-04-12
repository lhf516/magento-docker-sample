FROM php:8.2-fpm-buster

RUN apt-get update && apt-get install -y \
  cron \
  git \
  gzip \
  libbz2-dev \
  libfreetype6-dev \
  libicu-dev \
  libjpeg62-turbo-dev \
  libmcrypt-dev \
  libpng-dev \
  libsodium-dev \
  libssh2-1-dev \
  libxslt1-dev \
  libzip-dev \
  lsof \
  default-mysql-client \
  vim \
  zip \
  mc

RUN docker-php-ext-configure gd --with-freetype --with-jpeg

RUN docker-php-ext-install \
  bcmath \
  bz2 \
  calendar \
  exif \
  gd \
  gettext \
  intl

RUN docker-php-ext-install \
  mysqli \
  opcache \
  pcntl \
  pdo_mysql \
  soap \
  sockets \
  sodium \
  sysvmsg \
  sysvsem \
  sysvshm \
  xsl \
  zip


# RUN curl -sS https://getcomposer.org/installer | \
#   php -- --version=2.7 --install-dir=/usr/local/bin --filename=composer
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

RUN curl -LkSso /usr/bin/mhsendmail 'https://github.com/mailhog/mhsendmail/releases/download/v0.2.0/mhsendmail_linux_amd64' && \
    chmod 0755 /usr/bin/mhsendmail

COPY ./www.conf /usr/local/etc/php-fpm.d/
COPY ./php.ini /usr/local/etc/php/
COPY ./php-fpm.conf /usr/local/etc/

WORKDIR /var/www/html
