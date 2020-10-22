FROM php:7.2-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install \
    mysqli \
    pdo \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd

#COPY --chown=www-data:www-data . .
#COPY .env.example .env

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
#RUN ls vendor>/dev/null || composer install --no-scripts

# 使用docker-php自帶的php.ini設定檔
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

EXPOSE 9000
CMD [ "php-fpm" ]
