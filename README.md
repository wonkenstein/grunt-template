# README #

This README would normally document whatever steps are necessary to get your application up and running.

## What is this repository for? ##

* This is a project that I built to find out a bit more about Grunt and first steps with Laravel.

## How do I get set up? ##

### Summary of set up ###

#### `/src/` ####
Contains the files for the front-end:
less source files.
js files to be concatenated and minified.
lib - front-end libraries
img files that may need optimising.

#### `/laravel/` ####
Laravel installation to make template authoring a bit easier and can leverage any laravel goodies when tweaking the HTML.

http://localhost should be pointed to `laravel/public`

Grunt should compile the front-end files into `laravel/public` so the files are available to localhost

#### `/release/` ####
This should be where the HTML templates and files are exported to. A zip of the
templates and supporting files should be created and archived here as well.

The zip file is intended to be the deliverable to whoever needs the final HTML
templates and supporting files.

#### `Gruntfile.js` ####
Configuring grunt tasks and configuration

#### `package.json` ####
File containing grunt dependencies

#### `composer.phar` ####
composer to install laravel

## Dependencies ##

Grunt 0.4 and it's dependencies are required. More details at http://gruntjs.com/

php 5.3.7 or greater is required for Laravel. More details at http://laravel.com/docs/quick

An apache installation or something similar is required to run Laravel.

## Deployment instructions ##

* Set up Laravel and install using composer https://getcomposer.org/
    * `cd laravel`
    * `php composer.phar install`
* Set up localhost or a local vhost so the web root is at 'laravel/public'.
* Visit http://localhost and you should see the default laravel welcome screen
* Visit http://localhost/template1 and you should see the first template. You can navigate to the other templates in the main navigation.
* As grunt hasn't been installed or ran, there probably won't be any styling of the template files
* Install Grunt by following the instructions at http://gruntjs.com/getting-started
* Once Grunt is installed, install the project dependencies by
    * Change to the project's root directory.
    * Install project dependencies with 'npm install'.
* Build by running `grunt build`. This should compile all files, and move them into the 'laravel/public' directory. Going to http://localhost/template1 now in your browser should show it styled now.
* Create a release by running `grunt release`. This should create a zip file in release with all the HTML and supporting files.
* Run Grunt with `grunt`. This will do everything that `grunt build` does except optimising the images. It also sets up watch so files are compiled when less or js files are updated.



