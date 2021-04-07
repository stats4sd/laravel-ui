# Laravel Backpack UI

This fork of Laravel UI adds all the necessary scaffolding to start customising the default theme of [Laravel Backpack](https://github.com/Laravel-Backpack/CRUD). While Backpack provides a robust way to create your own themes to completely reskin the application, we've become used to simply replacing backpack's css assets with our own compiled sass files (maybe this isn't best practice, but we find it easier, as we can then do things like change the bootstrap variables to change the colour scheme consistently throughout the admin panel AND any front-end pages...)


> NOTE: This adds the same `ui` commands as the original repo, so it will conflict with the original! Please do not install this alongside laravel/ui - choose whichever one suits your needs more: 
> - Do you need to compile your own custom front-end asssets for Laravel Backpack? Choose this repo
> - Do you need to scaffold an Auth system for your legacy Laravel app? Choose laravel/ui. 

### To Use

```
composer require stats4sd/laravel-ui
php artisan ui backpack
```

This will do the equivalent of running `ui vue` (described below), but will also add the required dependancies to allow you to **completely replace** backpack's css file with your own compiled `public/css/app.css` file. 

You should probably NOT use this to scaffoled auth routes for your laravel app! If you're using Backpack, that comes with its own routes, which can be used - or consider Laravel Breeze (below). 

## Notes from Original Repo:

This legacy package is a very simple authentication scaffolding built on the Bootstrap CSS framework. While it continues to work with the latest version of Laravel, you should consider using [Laravel Breeze](https://github.com/laravel/breeze) for new projects. Or, for something more robust, consider [Laravel Jetstream](https://github.com/laravel/jetstream).

## Contributing

This is a fork of the main repository available here: https://github.com/laravel/ui. If you wish to contribute to the main functionality, please consider contributing to the main repo.

If you wish to contribute to the Laravel Backpack integration added here, please feel free to do so by forking this repo and submitting a PR.

## License

This repo is licensed in the same way as the original repo - with an [MIT License (MIT)](LICENCE.md). 
