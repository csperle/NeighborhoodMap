# Neighborhood

Little google maps web-application to visualize interesting locations near you. Initially created for the neighborhood of the [Gotthelf Quartier Basel (Switzerland)](https://de.wikipedia.org/wiki/Basel-Gotthelf).

## Prerequisite
 - To setup the application, PHP 5 needs to be installed on your machine (maybe easiest to install through a [LAMP](https://en.wikipedia.org/wiki/LAMP_%28software_bundle%29) bundle)
 - Webspace with PHP 5 Support
 - MySQL 5 Database access
 - Own Google Maps API Key (can be [obtained here](https://developers.google.com/maps/documentation/javascript/tutorial#api_key))

## Setup
First, you need to setup the application before you can use it. Clone the git repository and follow these steps.

### Download and install the server side PHP dependencies
- Start a shell and change-dir into the `web`-folder of the neighborhood application (where the `composer.json`-File is located).
- This application uses [Composer](https://getcomposer.org) for dependency management in PHP. On *ix systems install it using:
```sh
curl -sS https://getcomposer.org/installer | php
```
(See the composer [getting started](https://getcomposer.org/doc/00-intro.md) site, if you need more assistance)

- Run composer (using PHP):
```sh
php composer.phar install
```
### Setup the MySQL Database
Create the necessary tables using a MySQL client of your choice (web-hoster often offer a [phpmyadmin](http://www.phpmyadmin.net/) frontend): execute the SQL statements in the `create_tables.sql` file. (Check if a `marker` table has been created.)

## Configuration
Second, you need to configure the application:

### Configure the database settings
TODO

###Configure the Google Maps API key
TODO

## Installation
Now that you have set-up and configured the application, copy the `web`-folder to the webspace of your hoster. Installation complete!
