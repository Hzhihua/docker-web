FROM php:7.2.5-fpm

RUN docker-php-ext-install mysqli && \
    cd /root && pecl install swoole && \
    docker-php-ext-enable swoole && \
    rm -rf /root/swoole*
