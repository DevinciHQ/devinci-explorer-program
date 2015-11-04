FROM php:5.6-apache

RUN docker-php-ext-install mbstring

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install git -y --no-install-recommends &&  rm -r /var/lib/apt/lists/*
