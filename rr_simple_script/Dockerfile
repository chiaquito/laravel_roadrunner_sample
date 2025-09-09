FROM ghcr.io/roadrunner-server/roadrunner:2025.1.1 AS roadrunner
FROM php:8.2-cli

RUN apt-get update && \
    apt-get install -y vim curl git zip unzip procps \
        libicu-dev
RUN docker-php-ext-install intl pdo_mysql sockets

COPY --from=composer:2.5.4 /usr/bin/composer /usr/bin/composer
COPY --from=roadrunner /usr/bin/rr /usr/local/bin/rr

WORKDIR /app

COPY . /app/
RUN composer install

# CMD ["/bin/sh", "-c", "sleep 10m"]
CMD ["/bin/sh", "-c", "rr serve -c /app/.rr.yaml"]