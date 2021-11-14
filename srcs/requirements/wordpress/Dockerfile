FROM alpine:3.11

RUN apk update && \
	apk add --no-cache wget tar gettext \
	php7-fpm php7-mysqli php7-json

WORKDIR /var/www/

RUN addgroup -g 82 -S www-data && \
	adduser -u 82 -D  -G www-data www-data

RUN wget https://wordpress.org/latest.tar.gz && \
	tar -xvf latest.tar.gz && \
	rm -rf latest.tar.gz

RUN chown -R www-data:www-data /var/www/

COPY ./conf/wp-config.php /var/www/wordpress/wp-config.php
COPY ./conf/www.conf /etc/php7/php-fpm.d/

EXPOSE 9000

ENTRYPOINT ["php-fpm7", "-F"]
