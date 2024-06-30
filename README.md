# Library Manager

Welcome to the Library Manager built with Laravel.

## Table of Contents
- [Introduction](#introduction)
- [Setup Instructions](#setup-instructions)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)

## Introduction

This application manages a list of books and their authors, implementing CRUD (Create, Read, Update, Delete) functionality using Laravel framework.

## Setup Instructions

Follow these steps to set up and run the application locally:

### Prerequisites
- PHP >= 9
- Composer installed globally

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/Ian29s/library-manager.git

2. Install PHP dependencies using Composer:
    ```bash
    composer install
3. Copy .env.example to .env and configure your environment variables:
    windows:
    ```bash  
    copy .env.example .env

    linux/IOS etc.
    ```bash
    cp .env.example .env
4. Generate a new application key:
    ```bash
    php artisan key:generate
5. Run database migrations to create tables:
    ```bash
    php artisan migrate
6. php artisan db:seed
    ```bash
    php artisan db:seed

## Usage
1. Start the Laravel development server:
    ```bash
    php artisan serve
2. Open your web browser and visit http://127.0.0.1:8000 to view the application.
3. Use the navigation links to manage authors and books (CRUD operations).
    





