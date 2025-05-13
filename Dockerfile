FROM php:8.2-fpm

# Instala dependências
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Cria diretório da aplicação
WORKDIR /var/www

# Copia arquivos
COPY . .

# Instala dependências do Laravel
RUN composer install

# Permissões para o storage
RUN chmod -R 777 storage bootstrap/cache

# Expõe a porta 8000
EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=8000