# Lumen + Passport Authentication Demo

The demo of implementation [Lumen](http://lumen.laravel.com) with [Lumen-Passport](https://github.com/dusterio/lumen-passport) authentication. Also database seed and CORS supported.

#### Installation

Clone this repo and follow the steps below:  
1. Dependencies installation

```
composer install
```

2. Environment Settings, create `.env` file

```
cp .env.example .env
```

Update `.env` file as you need.  
you can get keygen by start the server

```
php -S localhost:8000 -t public
```

and go to http://localhost:8000/api/v1/keygen

Finally, run below commands

```
php artisane migrate
php artisane db:seed
php passport:install
```

** take noted of `passport:install` output.

#### Run

```
php -S localhost:8000 -t public
```

#### Testing

Use [Postman](https://www.getpostman.com/) do `POST` request to http://localhost:8000/api/v1/oauth/token with form data below

```
'grant_type' => 'password',
'client_id' => 'client-id',
'client_secret' => 'client-secret',
'username' => 'admin@example.com',
'password' => 'password',
'scope' => '*',
```

`client_id` and `client_secret` you can get from `passport:install` output command or from table `oauth_clients`

more information about [Passport Authentication](https://laravel.com/docs/5.6/passport)