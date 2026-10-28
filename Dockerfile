
FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libsqlite3-dev \
    libicu-dev libxml2-dev \
    && docker-php-ext-install pdo_sqlite pdo_mysql intl zip dom \
    && a2enmod rewrite \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
COPY --from=node:22 /usr/local/bin/node /usr/local/bin/node
COPY --from=node:22 /usr/local/lib/node_modules /usr/local/lib/node_modules

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

WORKDIR /var/www/html

COPY . .

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/000-default.conf \
    && composer install --no-dev --optimize-autoloader --no-interaction \
    && node /usr/local/lib/node_modules/npm/bin/npm-cli.js install \
    && node /usr/local/lib/node_modules/npm/bin/npm-cli.js run build \
    && mkdir -p storage/framework/cache \
       storage/framework/sessions \
       storage/framework/views \
       bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]
