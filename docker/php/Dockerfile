FROM php:7.4.25-fpm
WORKDIR /data/docker/php/extension

COPY extension /data/docker/php/extension
COPY C_sdk /data/docker/php/C_sdk

RUN apt-get update -y

#redis
RUN pecl install -o -f redis \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable redis

#mysql
RUN docker-php-ext-install pdo pdo_mysql mysqli

#zip
RUN apt-get install -y libzip-dev
RUN docker-php-ext-install zip

#wework
RUN phpize
RUN ./configure --with-php-config=/usr/local/bin/php-config --with-wxwork-finance-sdk=/data/docker/php/C_sdk/
RUN make && make install
RUN echo "extension=wxwork_finance_sdk.so" >> /usr/local/etc/php/conf.d/php-wxwork_finance_sdk.ini