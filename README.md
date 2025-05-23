# furima-1
Docker ビルド

1.git clone git@github.com :maru0928/furima-1.git 

2.docker-compose up -d --build

※MySQL は、OS によって起動しない場合があるのでそれぞれの PC に合わせて docker-compose.yml ファイルを編集してください。

# Laravel 環境構築

1.docker-compose exec php bash

2.composer install

3.composer require livewire/livewire

4.cp .env.example .env

5..env ファイルの一部を以下のように編集

DB_HOST=mysql

DB_DATABASE=laravel_db

DB_USERNAME=laravel_user

DB_PASSWORD=laravel_pass

6.php artisan key:generate

7.php artisan migrate

8.php artisan db:seed

# user のログイン用初期データ

メールアドレス: chusk@gmail.com

パスワード: chusk0928

# 使用技術

MySQL 8.0.26

PHP 8.2.27

Laravel 8

# URL

環境開発: http://localhost/login

phpMyAdmin: http://localhost:8080/

