FROM php:7.4-fpm

RUN docker-php-ext-install mysqli

WORKDIR /var/www/html

COPY ./php /var/www/html

CMD ["php-fpm"]