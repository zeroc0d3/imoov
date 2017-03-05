FROM mysql:5.7

MAINTAINER ZeroC0D3 Team <zeroc0d3.team@gmail.com>

ADD startup /etc/mysql/startup

RUN chown -R mysql:root /var/lib/mysql/

ARG MYSQL_DATABASE=zeroc0d3_dbname
ARG MYSQL_USER=zeroc0d3_user
ARG MYSQL_PASSWORD=zeroc0d3_password
ARG MYSQL_ROOT_PASSWORD=zeroc0d3_root

ENV MYSQL_DATABASE=$MYSQL_DATABASE
ENV MYSQL_USER=$MYSQL_USER
ENV MYSQL_PASSWORD=$MYSQL_PASSWORD
ENV MYSQL_ROOT_PASSWORD=$MYSQL_ROOT_PASSWORD

RUN sed -i 's/MYSQL_DATABASE/'$MYSQL_DATABASE'/g' /etc/mysql/startup && \
    sed -i 's/MYSQL_USER/'$MYSQL_USER'/g' /etc/mysql/startup && \
    sed -i 's/MYSQL_PASSWORD/'$MYSQL_PASSWORD'/g' /etc/mysql/startup

ADD my.cnf /etc/mysql/conf.d/my.cnf

CMD ["mysqld", "--init-file=/etc/mysql/startup"]

EXPOSE 3306
