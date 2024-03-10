# Usa a imagem oficial do PHP com Apache
FROM php:7.4-apache

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

# Habilita o módulo Apache mod_rewrite
RUN a2enmod rewrite

# Expondo a porta 80 do contêiner
EXPOSE 80

# Define o comando padrão a ser executado quando o contêiner for iniciado
CMD ["apache2-foreground"]
