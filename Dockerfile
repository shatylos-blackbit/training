FROM recognizebv/symfony-docker:php8.1-node18-image-dev

RUN apt-get update \
    && apt-get install -y libxslt-dev \
    && docker-php-ext-install xsl

RUN sed -i 's/Listen 8080/Listen 80/' /etc/apache2/apache2.conf

COPY apache.conf /etc/apache2/conf-available/
COPY 000-default.conf /etc/apache2/sites-available/

RUN a2enconf apache

RUN curl -sS https://get.symfony.com/cli/installer | bash

CMD ["apache2-foreground"]
