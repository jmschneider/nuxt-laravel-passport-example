# Setup

You'll need to copy and configure `.env.example` to `.env` as usual. I also use `valet link` to access the site locally. Whatever URL you access the site from you will need to use in the nuxt `.env` file as `LARAVEL_ENDPOINT`.

# Customizations

See [line 29](https://github.com/jmschneider/nuxt-laravel-passport-example/blob/master/laravel/app/Providers/AuthServiceProvider.php#L29) in the `AuthServiceProvider` for how passport was set up.
