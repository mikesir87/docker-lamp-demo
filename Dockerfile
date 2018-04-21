FROM php:7.2.4-apache

HEALTHCHECK --interval=5s --timeout=5s CMD curl -f localhost/healthcheck.php || exit 1

RUN docker-php-ext-install mysqli

COPY src/ /var/www/html/
