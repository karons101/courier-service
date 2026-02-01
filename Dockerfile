# ---------- Base Image ----------
FROM php:8.3-fpm

# ---------- System Dependencies ----------
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zip \
    curl \
    sqlite3 \
    libsqlite3-dev \
    nodejs \
    npm \
    && docker-php-ext-install pdo pdo_sqlite zip \
    && rm -rf /var/lib/apt/lists/*

# ---------- Composer ----------
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ---------- App Directory ----------
WORKDIR /app

# ---------- Copy Project ----------
COPY . .

# ---------- Install PHP Dependencies ----------
RUN composer install --no-dev --optimize-autoloader

# ---------- Ensure SQLite Database Exists ----------
RUN touch database/database.sqlite \
    && chown -R www-data:www-data database storage bootstrap/cache

# ---------- Install Frontend Dependencies & Build ----------
RUN npm install && npm run build

# ---------- Expose Port ----------
EXPOSE 8000

# ---------- Start Laravel ----------
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
