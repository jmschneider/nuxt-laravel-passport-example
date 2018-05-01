# Laravel

## Setup

You'll need to copy and configure `.env.example` to `.env` as usual. I also use `valet link` to access the site locally. Whatever URL you access the site from you will need to use in the nuxt `.env` file as `LARAVEL_ENDPOINT`.

## Customizations

See [line 29](https://github.com/jmschneider/nuxt-laravel-passport-example/blob/master/laravel/app/Providers/AuthServiceProvider.php#L29) in the `AuthServiceProvider` for how passport was set up.

# Nuxt

## Setup

You will need to copy the `.env.example` file to `.env` and populate it with values from laravel.

You can get `PASSPORT_CLIENT_ID` with `php artisan passport:client`.

You can get `PASSPORT_PASSWORD_GRANT_ID` and `PASSPORT_PASSWORD_GRANT_SECRET` with `php artisan passport:client --password`.

## Customizations

Most of the work is done in [nuxt.config.js](nuxt.config.js) and [login.vue](pages/login.vue).
