# OnixTestTask Installation Guide

This guide will help you to install this project

## Prerequisites

Before proceeding with the installation, make sure you have the following prerequisites installed on you machine:

-Docker [Download Docker](https://www.docker.com/get-started)

## Step 1: Clone the Repository

```
git clone https://github.com/RivGames/OnixTestTask.git
```

## Step 2: Configure Environmental Variables

```
cd OnixTestTask
cp .env.example .env
```

## Step 3: Start Docker Containers
To start the Docker containers and run the Laravel application, use Laravel Sail. From the root directory,
run the following command
```
./vendor/bin/sail up -d
```
Or if you have alias for sail in your ~/.bashrc:
```
sail up
```

## Step 4: Install dependencies
Now, you have to install all dependencies with Composer. Run the following command in the project directory:
```
./vendor/bin/sail composer install
```

## Step 5: Generate App Key
```
./vendor/bin/sail artisan key:generate
```

## Step 6: Run Database Migrations and Seeder
To create necessary database tables and records, run the following command:
```
./vendor/bin/sail artisan migrate --seed
``` 

## Step 7: Access the Application 
Once the installation is completed, you can access application by visiting 
_localhost_ in your browser

## Additional Configuration:
- To stop docker containers write:
```
./vendor/bin/sail down
```

# Functionality
- From _localhost_/ you should see the list of books which seeded by BookFactory
- To access the admin panel by route _localhost_/admin/ you should enter **email:admin@gmail.com** and **password:password**

## Screenshots:
![http://localhost/](https://ibb.co/qMZsY6n)
![http://localhost/admin/books](https://ibb.co/MMPkC6f)
![http://localhost/admin/books/create](https://ibb.co/K7KSj9C)
![http://localhost/admin/books/11](https://ibb.co/K7KSj9C)
