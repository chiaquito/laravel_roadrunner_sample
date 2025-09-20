FROM php:8.4-apache

EXPOSE 80
WORKDIR /var/www


RUN apt-get update && \
    apt-get install -y zip 

RUN docker-php-ext-install pcntl    


COPY ./httpd.conf /etc/apache2/sites-available/000-default.conf
COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer
RUN a2enmod rewrite

