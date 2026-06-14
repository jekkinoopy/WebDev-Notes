FROM mlocati/php-extension-installer:latest AS installer
FROM php:8.2-apache

# 使用預先編譯好的工具，用最省記憶體的方式安裝資料庫套件
COPY --from=installer /usr/bin/install-php-extensions /usr/local/bin/
RUN install-php-extensions pdo pdo_mysql mysqli

COPY . /var/www/html/
EXPOSE 80