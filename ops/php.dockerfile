FROM composer:2.1 AS composer

FROM php:7.4-cli

RUN apt-get -y update && apt-get -y upgrade && apt-get install -y \
    libzip-dev \
    unzip \
    git \
    vim \
    htop
RUN pecl install xdebug-3.0.3 && \
    docker-php-ext-enable xdebug

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN echo "\n \
export LS_OPTIONS='--color=auto' \n \
alias ls='ls \$LS_OPTIONS'\n \
alias ll='ls \$LS_OPTIONS -l'\n \
alias l='ls \$LS_OPTIONS -lA'\n \
alias rm='rm -i'\n \
alias cp='cp -i'\n \
alias t='/app/code/vendor/bin/phpunit tests'\n \
alias mv='mv -i'" >> ~/.bashrc
