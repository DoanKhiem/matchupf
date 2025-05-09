# Sử dụng image PHP 8.3 với Apache
FROM php:8.3-apache

# Cài đặt các tiện ích cần thiết
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    default-mysql-client \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql gd mbstring xml

# Cài đặt Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Cài đặt Node.js và npm
RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm

# Sao chép mã nguồn dự án
WORKDIR /var/www/html
COPY . .

# Cài đặt các thư viện PHP qua Composer
RUN composer install --optimize-autoloader --no-dev

# Cài đặt các thư viện Node.js
RUN npm install && npm run build

# Cấp quyền cho thư mục
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Kích hoạt module rewrite của Apache
RUN a2enmod rewrite

# Cấu hình Apache
COPY ./docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Mở cổng 80
EXPOSE 80

# Khởi động Apache
CMD ["apache2-foreground"]