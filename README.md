# Bridge Note Interview Test - Make Dashboard and API

## Features

- Login existing user
- Register new user
- Dashboard
- API for CRUD User


## Tech

Tech that used in this development

- [Laravel 8.0] - PHP Framework
- [Jetstream] - Laravel 8.0 authentication
- [Visual Studio Code] - Best code editor
- [POSTMAN] - RESTFUL API Client
- [Bootstrap] - For templating

## Installation

This app needs at least PHP Version of 7.2, and composer installed

Install the dependencies and devDependencies and start the server.

```sh
composer install
```

Edit .env files

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT={db_port}
DB_DATABASE={db_name}
DB_USERNAME={db_username}
DB_PASSWORD={db_password}
```

Run the laravel development server

```sh
php artisan serve
```

## Testing Dashboard With PHPUNIT Testing
```sh
php artisan test
```

## Testing API

This API doesn't need authentication. Here's the list of API :

Endpoints for viewing and manipulating the Accounts that the Authenticated User
has permissions to access.

* [Show All Users](documentation/accounts/get.md) : `GET /api/users/`
* [Create New User](documentation/accounts/post.md) : `POST /api/user/`
* [Show A Specific User](documentation/accounts/pk/get.md) : `GET /api/user/{user_id}/`
* [Update A Specific User](documentation/accounts/pk/put.md) : `PUT /api/user/{user_id}/`
* [Delete A Specific User](documentation/accounts/pk/delete.md) : `DELETE /api/user/{user_id}/`


## License

MIT
Muhammad Ramdhan Syakirin
