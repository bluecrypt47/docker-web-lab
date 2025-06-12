FROM php:7.2-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql && \
    apt-get update && \
    apt-get install -y \
    iputils-ping \
    net-tools \
    curl \
    wget \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html/
COPY ./src .
# config permission
RUN chown -R www-data:www-data /var/www/html
RUN chmod 755 /var/www/html
# RUN find . -type f -exec chmod 640 {} \;
# RUN find . -type d -exec chmod 750 {} \;

# RUN chmod +t -R /var/www/html/
