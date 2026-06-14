FROM php:8.2-apache
# 關鍵：這一行會幫你的 PHP 安裝連資料庫的工具
RUN docker-php-ext-install pdo pdo_mysql mysqli
COPY . /var/www/html/
EXPOSE 80