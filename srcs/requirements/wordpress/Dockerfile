FROM alpine:3.20.5

RUN apk add --no-cache php8 php8-fpm php8-mysqli php8-curl \
    php8-json php8-mbstring php8-xml php8-gd

COPY conf/wp-config.php /var/www/html/wp-config.php
WORKDIR /var/www/html

CMD ["php-fpm8", "--nodaemonize"]
