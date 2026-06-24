# syntax=docker/dockerfile:1
# ── Nigeria Locations API — PHP 8.4-FPM ───────────────────────
FROM php:8.4-fpm-alpine

# ── System dependencies ───────────────────────────────────────
RUN apk add --no-cache \
    bash curl git zip unzip \
    libzip-dev libpng-dev \
    oniguruma-dev libxml2-dev \
    icu-dev linux-headers \
    autoconf g++ make

# ── PHP extensions (cached across builds) ────────────────────
RUN --mount=type=cache,target=/tmp/pear \
    docker-php-ext-configure intl \
    && docker-php-ext-install \
        pdo pdo_mysql \
        mbstring zip \
        bcmath opcache pcntl \
        xml intl

# ── Redis extension ───────────────────────────────────────────
RUN --mount=type=cache,target=/tmp/pear \
    pecl install redis && docker-php-ext-enable redis

# ── Composer ──────────────────────────────────────────────────
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# ── Install PHP dependencies ──────────────────────────────────
COPY composer.json composer.lock ./
RUN --mount=type=cache,target=/root/.composer/cache \
    composer install --no-dev --optimize-autoloader --no-scripts

# ── Copy application ──────────────────────────────────────────
COPY . .

# ── Post-install scripts ──────────────────────────────────────
RUN composer run-script post-autoload-dump 2>/dev/null || true

# ── Permissions ───────────────────────────────────────────────
RUN mkdir -p /var/www/html/storage/tmp \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]
