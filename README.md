<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Mengkontes

Mengkontes is a repository for Final Project of Web Application Development. The name **mengkontes** is taken from contest in Indonesia.

## Requirements
- PHP >= 7.3.0
- Laravel 8
- laravel/ui
- Bootstrap 3

## Usage
1. Clone this repository.
2. Duplicate `.env.example` and rename it to `.env` then make changes according to your development server configuration.
3. Run the command `composer install` in the project folder of this repository.
4. Run the command `php artisan key:generate`
5. Create a database called `mengkontes` (match with your .env) on your development server
6. Run the command `php artisan migrate:fresh --seed`
7. Run the app `php artisan serve`

## Contribute (If you want)
It is assumed that you have been successfully run the application on your development server.

1. Before making any changes, create a new git branch with `git checkout -b <your_branch_name>`
2. Make a changes and don't forget to commit with descriptive message.
3. Push to the remote repository `git push origin <your_branch_name>`

Have a problem or question? Don't hesitate to open a discussion on Telegram.