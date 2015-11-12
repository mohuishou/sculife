FROM  daocloud.io/library/php:5.6.9-apache
MAINTAINER mohuishou <1@lailin.com>
COPY . /var/www/html/
EXPOSE 80  
CMD ["./start.sh"]
