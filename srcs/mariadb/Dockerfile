FROM alpine:3.18wink

RUN apk update && apk add --no-cache mariadb mariadb-client

RUN mkdir -p /var/lib/mysql /run/mysqld && \
    chown mysql:mysql /var/lib/mysql /run/mysqld && \
    mysql_install_db --user=mysql --basedir=/usr --datadir=/var/lib/mysql

COPY ./init.sql /docker-entrypoint-initdb.d/init.sql

VOLUME /var/lib/mysql

EXPOSE 3306

CMD ["mysqld", "--user=mysql", "--bind-address=0.0.0.0"]