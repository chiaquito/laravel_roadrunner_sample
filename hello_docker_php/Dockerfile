FROM php:8.4-apache

EXPOSE 80

RUN a2enmod rewrite

WORKDIR /var/www/html

COPY ./index.php /var/www/html/