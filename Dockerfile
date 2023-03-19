FROM docker.io/php:8.1-fpm

WORKDIR /app

COPY --from=docker.io/composer:latest /usr/bin/composer /usr/bin/composer

RUN docker-php-ext-install pdo_mysql

USER 1000