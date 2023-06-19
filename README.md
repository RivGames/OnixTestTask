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
## Step 3: Install Laravel Sail
```
php artisan sail:install
```
Then choose mysql or press 0

## Step 4: Start Docker Containers
To start the Docker containers and run the Laravel application, use Laravel Sail. From the root directory,
run the following command
```
./vendor/bin/sail up -d
```
Or if you have alias for sail in your ~/.bashrc:
```
sail up
```

## Step 5: Install dependencies
Now, you have to install all dependencies with Composer. Run the following command in the project directory:
```
./vendor/bin/sail composer install
```

## Step 6: Generate App Key
```
./vendor/bin/sail artisan key:generate
```

## Step 7: Run Database Migrations and Seeder
To create necessary database tables and records, run the following command:
```
./vendor/bin/sail artisan migrate --seed
``` 
## Step 8: Instal Frontend
Install and compile the frontend dependencies with ```npm install && npm run dev```

## Step 9: Access the Application 
Once the installation is completed, you can access application by visiting 
_localhost_ in your browser

## Additional Configuration:
- To stop docker containers write:
```
./vendor/bin/sail down
```

# Functionality
- From localhost/ you should see the list of books which seeded by BookFactory
- To access the admin panel by route localhost/admin/ you should enter **email:admin@gmail.com** and **password:password**

## Screenshots:
![Screenshot from 2023-06-17 13-12-04](https://github.com/RivGames/OnixTestTask/assets/82283436/0aaf8e20-ccdc-41d5-b4e3-792c9b63cb08)
![Screenshot from 2023-06-17 13-12-26](https://github.com/RivGames/OnixTestTask/assets/82283436/7156a410-f1c9-4a79-901b-42a26ab936cd)
![Screenshot from 2023-06-17 13-11-37](https://github.com/RivGames/OnixTestTask/assets/82283436/127db8b1-f935-4717-8b99-7f8f1ec7dc22)
![Screenshot from 2023-06-17 13-09-35](https://github.com/RivGames/OnixTestTask/assets/82283436/a7a9a227-1009-4aa2-abc4-c1ca3cfd204d)
