# Introduction
This library provides an easy way to include the [Jarlskov/Untappd](https://github.com/Jarlskov/untappd) API wrapper in your Laravel project.

# Installation
## Using composer
### Install package
> composer require jarlskov/laravel-untappd

### Publish config file
> php artisan vendor:publish --provider="Jarlskov\LaravelUntappd\Providers\UntappdServiceProvider"

# Usage
In the current version of [Jarlskov/Untappd](https://github.com/Jarlskov/untappd) you need to provide your own API credentials. You can see in the [Untappd API docs](https://untappd.com/api/docs) how to get your own credentials.

These credentials needs to be added to your Laravel project.

## .env
The preferred way to add your credentials is to add them to your `.env` file by adding two new properties

> UNTAPPD_CLIENT_ID=[YOUR_UNTAPPD_CLIENT_ID]
>
> UNTAPPD_CLIENT_SECRET=[YOUR_UNTAPPD_CLIENT_SECRET]

## Edit the config file
Alternatively, you can add the credentials directly in the config file.

The config is found in `config/untappd.php`.
