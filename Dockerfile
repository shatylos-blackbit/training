FROM recognizebv/symfony-docker:php8.1-node18-image-dev

RUN apt-get update \
    && apt-get install -y libxslt-dev \
    && docker-php-ext-install xsl

RUN curl -sS https://get.symfony.com/cli/installer | bash

CMD ["apache2-foreground"]
