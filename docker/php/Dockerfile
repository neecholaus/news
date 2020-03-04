FROM php:7.4-fpm

RUN apt-get -y update; \
    apt-get -y upgrade;

RUN apt-get install -y vim

# run php-fpm as root, to match /var/www ownership
RUN sed -i 's/user = www-data/user = root/g' /usr/local/etc/php-fpm.d/www.conf
RUN sed -i 's/group = www-data/group = root/g' /usr/local/etc/php-fpm.d/www.conf

CMD ["php-fpm", "-R"]
