FROM php:7.4-apache
RUN a2enmod rewrite
COPY . /var/www/html/
WORKDIR /var/www/html/
EXPOSE 80
