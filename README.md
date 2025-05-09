# MatchUpF

MatchUpF là một ứng dụng web được xây dựng với Laravel 12 và Vue.js 3, cung cấp nền tảng kết nối và tương tác giữa người dùng.

## 🚀 Công nghệ sử dụng

### Backend

- PHP 8.3
- Laravel Framework
- MySQL 8.0
- Nginx
- Supervisor

### Frontend

- Vue.js 3
- TypeScript
- Vite
- TailwindCSS
- Inertia.js
- VueUse

## 📋 Yêu cầu hệ thống

- Docker
- Docker Compose
- Git

## 🛠 Cài đặt và Chạy Project

### 1. Clone Repository

```bash
git clone <repository-url>
cd matchupf
```

### 2. Cấu hình môi trường

Tạo file `.env` từ file `.env.example`:

```bash
cp .env.example .env
```

### 3. Build và Chạy Docker Containers

```bash
docker-compose up -d --build
```

### 4. Cài đặt Dependencies

```bash
# Cài đặt PHP dependencies
docker-compose exec app composer install

# Cài đặt Node.js dependencies
docker-compose exec app npm install
```

### 5. Cấu hình Database

```bash
# Chạy migrations
docker-compose exec app php artisan migrate

# (Tùy chọn) Chạy seeders
docker-compose exec app php artisan db:seed
```

### 6. Build Frontend Assets

```bash
docker-compose exec app npm run build
```

## 🌐 Truy cập ứng dụng

- Web Application: http://localhost:8000
- phpMyAdmin: http://localhost:8080
    - Username: root
    - Password: matchupfast

## 📁 Cấu trúc Project

```
matchupf/
├── app/                    # Backend Laravel
│   ├── Models/            # Database models
│   ├── Http/              # Controllers, Middleware
│   └── Providers/         # Service providers
├── resources/             # Frontend resources
│   ├── js/               # Vue.js components và logic
│   ├── css/              # Stylesheets
│   └── views/            # Blade templates
├── src/                  # TypeScript source code
├── routes/               # Route definitions
├── database/             # Migrations và seeds
├── tests/                # Unit và feature tests
├── storage/              # File storage
├── public/               # Public assets
└── docker/               # Docker configurations
```

## 🔧 Cấu hình Docker

Project sử dụng 3 services chính:

1. **App Service** (PHP + Nginx)

    - Port: 8000
    - PHP 8.3 với FPM
    - Nginx web server
    - Supervisor process manager

2. **MySQL Service**

    - Port: 3306
    - Database: matchupfast
    - Username: root
    - Password: matchupfast

3. **phpMyAdmin**
    - Port: 8080
    - Tự động kết nối với MySQL

## 🛠 Các lệnh hữu ích

### Docker Commands

```bash
# Khởi động containers
docker-compose up -d

# Dừng containers
docker-compose down

# Xem logs
docker-compose logs -f

# Rebuild containers
docker-compose up -d --build
```

### Laravel Commands

```bash
# Chạy migrations
docker-compose exec app php artisan migrate

# Chạy seeders
docker-compose exec app php artisan db:seed

# Clear cache
docker-compose exec app php artisan cache:clear

# Generate key
docker-compose exec app php artisan key:generate
```

### Frontend Commands

```bash
# Development mode
docker-compose exec app npm run dev

# Build production
docker-compose exec app npm run build

# Format code
docker-compose exec app npm run format

# Lint code
docker-compose exec app npm run lint
```

## 🔍 Troubleshooting

### 1. Permission Issues

Nếu gặp vấn đề về quyền truy cập:

```bash
docker-compose exec app chown -R www-data:www-data /var/www
docker-compose exec app chmod -R 755 /var/www/storage
```

### 2. Container không khởi động

Kiểm tra logs:

```bash
docker-compose logs app
docker-compose logs mysql
```

### 3. Database Connection Issues

- Kiểm tra file `.env` có đúng thông tin kết nối
- Đảm bảo MySQL container đang chạy
- Thử restart containers:

```bash
docker-compose down
docker-compose up -d
```

### 4. Frontend Development Issues

- Clear cache của Vite:

```bash
docker-compose exec app npm run dev -- --force
```

- Rebuild node_modules:

```bash
docker-compose exec app rm -rf node_modules
docker-compose exec app npm install
```

## 📝 Contributing

1. Fork project
2. Tạo branch mới (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to branch (`git push origin feature/AmazingFeature`)
5. Tạo Pull Request

## 📄 License

[License Name] - Xem file `LICENSE` để biết thêm chi tiết
