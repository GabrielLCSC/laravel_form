# About

Here is an example of a contact form using the Laravel framework.

# Getting started

## Installation

Clone the repository

    git clone git@github.com:GabrielLCSC/laravel_form.git

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve
    
Run the database seeder and you're done

    php artisan db:seed --class=ContactsTableSeeder

You can now access the server at http://localhost:8000


***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh
