# Laravel Test Application

## Requirements

- MongoDB server instance
- PHP 8.3 + Composer
- pecl/mongodb extension

## Installation

```bash
composer install
```

If MongoDB is not running locally adjust DB_URI in .env accordingly.

## Run Tests with 5.0.2

Run phpunit multiple times:

```bash
vendor/bin/phpunit
```

The [result](./phpunit-output-v5.0.2.txt) shows a steadily increasing execution time of the setUp method.

## Run Tests with 4.8.0

```bash
composer require "mongodb/laravel-mongodb:^4.8"
vendor/bin/phpunit
```

The [result](./phpunit-output-v4.8.0.txt) shows a stable execution time of the setUp method.
