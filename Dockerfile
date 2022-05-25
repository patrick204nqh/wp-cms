# Composer
FROM composer:latest as composer_builder


# Wordpress
FROM wordpress:php8.0

COPY --from=composer_builder /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/html

COPY composer.json composer.lock ./

RUN ["/bin/bash", "-c", "composer install --ignore-platform-reqs --no-scripts"]
