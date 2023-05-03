
<p align="center">
 <h2>Hackerry Laravel application</>
</p>

Hakerry is a Laravel application that allows users to post events and book them. This README file provides instructions on how to run the application locally.

# Table of Contents

* [Installation](#installation)
  * [Requirements](#requirements)
  * [Installation Steps](#installation-steps)
  * [Getting Started](#getting-started)
* [Features](#Features)
* [Components](#Components)
  * [Languages](#Languages)
  * [Development Environment](#Development-Environment)
  * [Database](#database)
  * [DBMS](#DBMS)
  * [API](#api)
  * [Frameworks and Libraries](#Frameworks-and-Libraries)
  * [Techniques](#techniques)
* [Details](#details)
* [Future Improvements](#future-improvements)

#### Requirements

To run this application locally, you must have the following software installed on your system:

* PHP 7.4 or higher
* Composer
* Node.js
* MySQL or MariaDB

#### Installation

To install and run the application, follow the steps below:

1. Clone the Git repository to your local machine:

```bash
git clone https://github.com/your-username/hakerry.git

```
2. Change into the project directory:

```bash
cd hakerry

```

3.Install the PHP dependencies using Composer:

```php
composer install

```

4. Create a new database for the application.

Create a copy of the .env.example file and rename it to .env. Update the DB_DATABASE, DB_USERNAME, and DB_PASSWORD variables in the .env file to match your local database configuration.

5. Generate a new application key:

```php
php artisan key:generate

```

6.Run the database migrations to create the required database tables:

```php

php artisan migrate

```

7.Seed the database with sample data:

```php
php artisan db:seed

```

8.Install the Node.js dependencies:

```java

npm install

```

9. Build the front-end assets:

```java

npm run dev

```

10.Running the Application
To run the application, use the following command:

```php
php artisan serve
```

This will start a local web server at http://localhost:8000. You can access the application by visiting this URL in your web browser.

#### Usage
Once the application is running, you can create a new user account and log in. From the home page, you can view existing events, create new events, and book events.

#### License
This application is open source software licensed under the MIT license.