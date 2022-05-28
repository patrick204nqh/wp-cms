# Composer
FROM composer:latest as composer_builder


# Wordpress
FROM wordpress:php8.0

COPY --from=composer --chown=www-data:www-data /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/html

COPY packages/ ./packages/
COPY composer.json composer.lock ./

# RUN chown -R www-data:www-data /var/www
# USER www-data

RUN ["/bin/bash", "-c", "composer install --ignore-platform-reqs --no-scripts"]
