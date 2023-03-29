<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://i.ibb.co/gd9NLQ8/lgoo.png" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Burger Dungeon - Laravel Framework and TailwindCSS

<p>Burger Dungeon is a web application built with Laravel Framework. It allows users to order burgers online and have them delivered to their doorstep. This README file provides instructions on how to install and set up the application on your local machine.</p>

## Features

Burger Dungeon is a web application built with Laravel Framework. It allows users to view products online.

<p>	:octocat: User authentication (registration, login, logout)</p>
<p>	:octocat: Menu with different types of burgers</p>
<p>	:octocat: Admin dashboard to manage products in menu</p>
<p>	:octocat: Create, Read, Update, and Delete products from the database</p>

## Installation

### 1. Clone the repository to your local machine:
<p>git clone https://github.com/your-username/burger-dungeon.git</p>

### 2. Install the dependencies using Composer:
<p>cd burger-dungeon</p>
<p>cd composer install</p>

### 3. Rename the .env.example file to .env and fill in the necessary configuration settings:
<p>cp .env.example .env</p>

### 4. Generate a new application key:
<p>php artisan key:generate</p>

### 5. Migrate the database tables:
<p>php artisan migrate</p>

### 6. Seed the database with sample data:
<p>php artisan db:seed</p>

### 7. Start the local development server:
<p>php artisan serve</p>



## Usage
<p>Open your web browser and navigate to http://localhost:8000 to view the application. You can register as a new user, or log in as an existing user to view the menu, add items to your cart, and place an order.</p>

