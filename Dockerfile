FROM php:7.2.4-apache as base
RUN docker-php-ext-install mysqli

FROM base
COPY src/ /var/www/html/
HEALTHCHECK --interval=5s --timeout=5s CMD curl -f localhost/healthcheck.php || exit 1

