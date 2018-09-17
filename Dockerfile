FROM php:7
RUN apt-get update -y && apt-get install -y openssl zip unzip git libpq-dev
RUN docker-php-ext-install mysqli
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring pdo_mysql pdo_pgsql
ADD . /test_project
WORKDIR /test_project
RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=8181
EXPOSE 8181