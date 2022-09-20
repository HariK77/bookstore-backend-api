# BookStore App (Backend Api Laravel)

This is a simple REST API app, made with [Laravel 9](https://laravel.com/) framework. It has [Laravel Sanctum](https://laravel.com/docs/9.x/sanctum) authentication, search, crud and admin users etc., It has a [frontend React App](https://github.com/HariK77/bookstore-app) to consume this api.

More information about [Laravel 9](https://laravel.com) framework can be found [here](https://laravel.com/docs/9.x).

## Server Requirements

Please make sure you have all the required settings(localhost) to laravel 9 application. 

## Installation instructions

- clone the repository with, $ `git clone https://github.com/HariK77/bookstore-backend-api`.
- cd into the installation folder `$ cd bookstore-backend-api`
- run `$ composer install`.
- run `$ sudo chmod -R 0777 storage/` (no need for windows xampp). 
- create a .env file from .env.example, run `$ cp .env.example .env` (In windows just rename the file manually).
- change the `APP_URL` in .env file, to whichever url you are going to serve this application. ex: `http://127.0.0.1:8000`
- generate the key `php artisan key:generate`
- add `APP_SECRET="My-App-Secret-777"` in .env file. used for creating tokens.
- if you have docker engine installed, just run `$ docker compose up -d` to start mysql server (you should have docker installed). Make sure to check the mysql service running correctly with this command `$ docker compose ps`
- (Note): If don't have docker engine installed. pls configure db settings .env file as per your mysql local installation.
- create database and run `$ php artisan migrate`.
- create dummy data in role table with `$ php artisan db:seed`. I'm calling [fakerapi.it](https://fakerapi.it/api/v1/books?_quantity=200) in BookSeeder class. Plase make sure you are connected to internet.
- If you get any issue while seeding. do `$ php artisan migrate:refresh` and then seed again `$ php artisan db:seed`.
- run `$ php artisan serve` to run this application.

## How to use the application

- run `php artisan serve` and access `http://127.0.0.1:8000/api/status` to check api is working.
- Import the postman collection (`Bookstore.postman_collection.json`) in [postman](https://www.postman.com/downloads/) application that has been included in the repository.
- To test this with a UI interface, go to this [repository](https://github.com/HariK77/bookstore-app). Follow the instructions mentioned in README.md file. start both applications and test.
- Admin User Credentials: (Only Admin can add, update books)
  - Email: `admin@bookstore.com`
  - Password: `password`
- Normal Users:
  - Emails: `customerone@bookstore.com`, `customertwo@bookstore.com`
  - Password: `password` same for both
