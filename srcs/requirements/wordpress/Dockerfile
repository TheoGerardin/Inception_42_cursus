FROM alpine:3.20.5

RUN apk add --no-cache php php-fpm php-mysqli php-curl \
    php-json php-mbstring php-xml php-gd

COPY conf/wp-config.php /var/www/html/wp-config.php
WORKDIR /var/www/html

CMD ["php-fpm", "--nodaemonize"]
