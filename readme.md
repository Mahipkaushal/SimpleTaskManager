## Task Manager in Laravel 5.4

This is a Simple Task Management project built using Laravel 5.4 Framework

## Installation

In order to run this project on Local Machine please follow the below steps

1. Copy this project in the root directory
2. Create Database
3. >> `$ composer install`
4. >> `$ php artisan key:generate`
5. Make copy of .env.example file and rename to .env
6. setup your database credentials (using .env file)
7. >> php `$ php artisan migrate`
8. >> php `$ php artisan db:seed` (required to login)

## Details

Command db:seed creates basic rows in the respective table such as

- Fill Roles Table
- Create first user in Users Table (Username = "admin" && Password = "admin")

User Access Levels

- Admin
	- Task access (Create, Update, Read, Delete)
	- SubTask access (Create, Update, Read, Delete)
	- User access (Create, Update, Read, Delete)

- User
	- Task access (Create, Read)
	- SubTask access (Create, Read)
	- User access (No Access)

- Moderator
	- Task access (Create, Update, Read)
	- SubTask access (Create, Update, Read)
	- User access (No Access)
