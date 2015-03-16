# NeighborhoodMap

Little google maps web-application to visualize interesting locations near you. Initially created for the neighborhood of the [Gotthelf Quartier Basel (Switzerland)](https://de.wikipedia.org/wiki/Basel-Gotthelf).

## Prerequisite
 - Local PHP 5 installation (maybe easiest to install through a [LAMP](https://en.wikipedia.org/wiki/LAMP_%28software_bundle%29) bundle)
 - Webspace with PHP 5 support and MySQL database access
 - Own Google Maps API Key (can be [obtained here](https://developers.google.com/maps/documentation/javascript/tutorial#api_key))

*Setup and configuration of the application is a little bit annoying. All this could be done via a script, but I am lacking time and knowledge to write it.*

## Setup
Clone the git repository and follow these steps.

### Download and install the server side PHP dependencies
- Start a shell and change-dir into the `web/service`-folder of the neighborhood application (where the `composer.json`-File is located).
- This application uses [Composer](https://getcomposer.org) for dependency management in PHP. On *ix systems, install it using:
```sh
curl -sS https://getcomposer.org/installer | php
```
(See the composer [getting started](https://getcomposer.org/doc/00-intro.md) site, if you need more assistance)

- Run composer (using PHP):
```sh
php composer.phar install
```
This step downloads and installs all PHP dependencies that are needed by the neighborhood application.

### Setup the MySQL Database
Create the necessary tables using a MySQL client of your choice (web-hoster often offer a [phpmyadmin](http://www.phpmyadmin.net/) frontend): execute the SQL statements in the `create_tables.sql` file. (Check if a `marker` table has been created.)

## Configuration
Configure the application:

### Configure the database settings
Open `web/service/service.php` with a text editor and fill in the correct values for `DB_NAME`, `DB_USER`, `DB_PASSWORD` and `DB_HOST`.

###Configure the Google Maps API key
Open `web/index.html` with a text editor and fill in your Google Maps API Key for `API_KEY`.

###Change map options
Change the map options: `center` and `zoom`.

## Installation
Now that you have set-up and configured the application, copy the `web`-folder to the webspace of your hoster. Installation complete!
