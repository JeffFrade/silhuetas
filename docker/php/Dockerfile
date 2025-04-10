FROM composer:2 AS composer
FROM php:8.3-fpm

USER root
COPY --from=composer /usr/bin/composer /usr/bin/composer

ENV COMPOSER_MEMORY_LIMIT=-1

RUN apt-get update \
    && useradd -m jefffrade

WORKDIR /silhuetas

RUN chown -R jefffrade:jefffrade /silhuetas
USER jefffrade
