# Install PHP Apache
FROM php:8-apache

# Install composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

# Install PHP extensions
RUN apt-get update && apt-get install -y git gnupg unzip zip libxml2-dev libpq-dev && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-install opcache mysqli pdo_mysql pdo_pgsql pgsql session soap
COPY conf/php.ini /usr/local/etc/php/conf.d/src.ini

#Config Apache
COPY conf/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY conf/start-apache /usr/local/bin
RUN a2enmod rewrite 

COPY src /var/www/html
RUN chown -R www-data:www-data /var/www

CMD ["start-apache"]
