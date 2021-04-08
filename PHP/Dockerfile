FROM php:7.3.0-apache
EXPOSE 80
EXPOSE 443
RUN apt-get update
RUN apt-get install vim -y
RUN apt-get install zip -y
RUN apt-get install unzip  -y
RUN apt-get install git -y
COPY php_testing.conf /etc/apache2/sites-available
RUN a2dissite 000-default.conf
RUN a2ensite php_testing.conf
RUN a2enmod rewrite
RUN service apache2 restart
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
