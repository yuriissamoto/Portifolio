# Usa a imagem oficial do PHP
FROM php:8.2

# Instala dependências necessárias
RUN apt-get update && \
    apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Copia os arquivos do Laravel para o diretório de trabalho do Apache
COPY . /var/www/html

# Define as permissões necessárias para o Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Define o diretório de trabalho
WORKDIR /var/www/html

# Expondo a porta 8000
EXPOSE 8000

# Define o comando padrão a ser executado quando o contêiner for iniciado
CMD ["php", "artisan", "serve", "--host", "0.0.0.0", "--port", "8000"]
