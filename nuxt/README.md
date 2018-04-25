# Setup

You will need to copy the `.env.example` file to `.env` and populate it with values from laravel.

You can get `PASSPORT_CLIENT_ID` with `php artisan passport:client`.

You can get `PASSPORT_PASSWORD_GRANT_ID` and `PASSPORT_PASSWORD_GRANT_SECRET` with `php artisan passport:client --password`.

# Customizations

Most of the work is done in [nuxt.config.js](nuxt.config.js) and [login.vue](pages/login.vue).
