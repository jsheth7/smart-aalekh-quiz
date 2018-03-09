# Smart Aalekh Quiz

## Summary
Smart Aalekh Quiz lets you create a quiz and share it with your friends.
After your friends take the quiz, you can see a visual representation of their answers over time (answer trends).

You can see a demo of it here: 

To take the quiz, you must create an account. However, anyone can see answer trends.

## Technical overview
It is written using the Laravel 5.6 framework for PHP, and relies on a database such as MySQL or Postgres.

## Version
This is an initial version. I have a number of ideas for improvement, listed at the end.

## Local installation

### Clone source code

Clone this Github repository to a folder such as  ~/Sites/quiz

    mkdir ~/Sites
    cd ~/Sites
    git clone 

### Set up MySQL locally

https://dev.mysql.com/downloads/mysql/

Set a root password, and create a database called quiz
    
### Install Laravel valet (recommended)

Install Laravel valet (MacOS X only) and set it to serve sites under ~/Sites
https://laravel.com/docs/5.6/valet

Windows users should install Laravel Homestead:
https://laravel.com/docs/5.6/homestead

### Install all needed libraries:

    composer install

### Configure Laravel

    cp .env.example .env
    
Make sure it can connect to your local database:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=quiz
    DB_USERNAME=root
    DB_PASSWORD=YOURPASSWORD

### Run Laravel migrations

    php artisan migrate
        
### Install front-end dependencies
    
    npm install
    
### Compile front-end assets

    npm run watch

### Run tests

### Visit site

http://quiz.test/

## Deploy using Heroku

## Create Heroku app (with PHP buildback)

    heroku create my-fabulous-quiz-xyz --buildpack heroku/php
    
### IMPORTANT: Proxy configuration

This project has already been configured to be deployed to Heroku.

If you're deploying it to another provider, please edit the following file appropriately:

    app/Http/Middleware/TrustedProxies.php

### Logging configuration

Also, the logging mechanism in 'config/logging.php' has been set to 'errorlog', which works for Heroku.

### Generate app key

    php artisan key:generate --show
    
Set it as a Heroku environment variable:

    heroku config:set APP_KEY=…
    
### Set app name

    heroku config:set APP_NAME="My Quiz Demo"
    
#### Set app environment to production

    heroku config:set APP_ENV=production
    
### Create Postgres database server

    heroku addons:create heroku-postgresql:hobby-dev
    
### Configure database access

Run

    heroku config | grep DATABASE_URL | php heroku-config.php
    
Copy and past the outputted commands into your Terminal

### Deploy code to Heroku

### Run migrations on heroku
    heroku run bash
    $ php artisan migrate