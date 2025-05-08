FROM php:8.3-fpm

# Cài đặt các phần mềm cần thiết
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nginx \
    supervisor

# Cài đặt PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Cài đặt Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Sao chép mã nguồn
WORKDIR /var/www
COPY . .

# Cài đặt dependencies
RUN composer install --optimize-autoloader --no-dev
RUN npm install && npm run build

# Cấp quyền
RUN chown -R www-data:www-data /var/www
RUN chmod -R 755 /var/www/storage

# Copy file cấu hình Nginx
COPY ./docker/nginx.conf /etc/nginx/sites-available/default

# Copy file cấu hình Supervisor
COPY ./docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Expose port
EXPOSE 80

# Chạy Supervisor
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]