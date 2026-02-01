# ---------- Base Image ----------
FROM php:8.3-fpm

# ---------- System Dependencies ----------
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    zip \
    curl \
    nodejs \
    npm \
    && docker-php-ext-install pdo pdo_pgsql zip \
    && rm -rf /var/lib/apt/lists/*

# ---------- Composer ----------
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ---------- App Directory ----------
WORKDIR /app

# ---------- Copy Project ----------
COPY . .

# ---------- Install PHP Dependencies ----------
RUN composer install --no-dev --optimize-autoloader

# ---------- Install Frontend Dependencies ----------
RUN npm install && npm run build

# ---------- Permissions ----------
RUN chown -R www-data:www-data storage bootstrap/cache

# ---------- Expose Port ----------
EXPOSE 8000

# ---------- Start Laravel ----------
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8000
