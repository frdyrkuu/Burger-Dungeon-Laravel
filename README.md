<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://i.ibb.co/nrvc7b2/sdad.png" width="400" alt="Laravel Logo"></a></p>

# Burger Dungeon - Laravel Framework and Tailwind CSS

<p>Burger Dungeon is a web application built with Laravel Framework. It allows users to view menus online. This README file provides instructions on how to install and set up the application on your local machine.</p>

## Features

Burger Dungeon is a web application built with Laravel Framework. It allows users to view products online.
<p align="center"><a><img src="https://gist.githubusercontent.com/brudnak/aba00c9a1c92d226f68e8ad8ba1e0a40/raw/e1e4a92f6072d15014f19aa8903d24a1ac0c41a4/nyan-cat.gif"></a></p>
<p>	:octocat: User authentication (registration, login, logout)</p>
<p>	:octocat: Menu with different types of burgers</p>
<p>	:octocat: Admin dashboard to manage products in menu</p>
<p>	:octocat: Create, Read, Update, and Delete products from the database</p>

## Installation

### 1. Clone the repository to your local machine:
<p>git clone https://github.com/frdyrkuu/Burger-Dungeon-Laravel.git</p>

### 2. Install the dependencies using Composer:
<p>cd Burger-Dungeon-Laravel</p>
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
<p>Open your web browser and navigate to http://localhost:8000 to view the application. You can register as a new user, or log in as an existing user to view the menu.</p>
