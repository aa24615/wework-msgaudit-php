FROM php:7.4.25
WORKDIR /data/

COPY extension /data/

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
RUN phpize && ./configure --with-php-config=$INSTALL_PHP_PATH/php-config --with-wxwork-finance-sdk=/data/extension/libWeWorkFinanceSdk_C.so && make && make install && echo "extension=wxwork_finance_sdk.so" >> /usr/local/etc/php/conf.d/php.ini
