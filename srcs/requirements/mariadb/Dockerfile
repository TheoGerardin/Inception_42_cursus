FROM alpine:3.20.5

RUN apk add --no-cache mariadb mariadb-server

COPY conf/init.sql /docker-entrypoint-initdb.d/
COPY tools/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

CMD ["/entrypoint.sh"]
