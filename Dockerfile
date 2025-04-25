FROM php:8.2-apache

WORKDIR /var/www/html

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    git \
    curl

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files
COPY . .

# Set Apache document root to public directory
RUN sed -i -e 's/html/html\/public/g' /etc/apache2/sites-available/000-default.conf

# Install dependencies
RUN composer install --no-interaction --optimize-autoloader

# Set permissions for storage directory
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/database
RUN chmod -R 775 /var/www/html/database

# Generate application key
RUN php artisan key:generate
RUN php artisan migrate:refresh --seed
