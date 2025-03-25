FROM php:8.3-fpm

# Install system deps
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    curl \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    ffmpeg \
    jpegoptim \
    optipng \
    pngquant \
    gifsicle \
    webp \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/lychee

COPY . /var/www/lychee

RUN composer install --no-dev --optimize-autoloader && \
    php artisan config:clear && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

CMD ["php-fpm"]
