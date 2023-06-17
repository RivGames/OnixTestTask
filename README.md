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
