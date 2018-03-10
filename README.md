# Smart Aalekh Quiz

## Summary
Smart Aalekh Quiz lets you create a quiz and share it with your friends.
After your friends take the quiz, you can see a visual representation of their answers over time (answer trends).

You can see a demo of it here: 

https://smart-aalekh.herokuapp.com/

To take the quiz, you must create an account. However, anyone can see answer trends.

## Why is it called Smart Aalekh ?

The word "alekh", or "aalekh" has eleven different meanings in Hindi, including:
document, graph, script, dictation, record, sketch, treatise, survey, plan, drawing, write-up

Amazingly, these words describe almost all the parts of the process of learning Laravel and creating this application!
Smart Aalekh is a play on Aalekh and "smart alec".

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

Set the database type to Postgres

    heroku config:set DB_CONNECTION=pgsql
    
It has been configured to use the DATABASE_URL environment variable, which has already been set.

Note: you can also run the following command and copy and paste each item into your Terminal to override the DATABASE_URL:

    heroku config | grep DATABASE_URL | php heroku-config.php
    
### Deploy code to Heroku

    git push heroku master

### Run migrations on heroku
    heroku run bash
    $ php artisan migrate
    
### Troubleshooting

Set Heroku debug to on to see the problem (if the logs don't show the right info):

    heroku config:set APP_DEBUG=true
    
Then set it back!

    heroku config:set APP_DEBUG=false
    
## TODO

* Get logging working on Heroku (heroku logs)
* See if there is a more appropriate setting for allowed headers in TrustProxies.php (currently set to Request::HEADER_X_FORWARDED_AWS_ELB)
* Improve theme / color scheme / look-n-feel
* Add automated tests (unit and functional)
* Allow more than one Quiz to be created, and used