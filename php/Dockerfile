FROM php:7.2-fpm

RUN apt-get update && apt-get install -y libcurl4-gnutls-dev libexpat1-dev gettext libz-dev libssl-dev git zip unzip

RUN cd /var/www
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php composer.phar create-project symfony/skeleton symfony-stack
