FROM  index.docker.io/richarvey/nginx-php-fpm:latest
MAINTAINER mohuishou <1@lailin.com>
COPY . /usr/share/nginx/html/
EXPOSE 80  
CMD ["./start.sh"]
