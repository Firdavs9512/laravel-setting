# Laravel Setting Package

The `laravel-setting` package provides an easy way to manage application settings in a Laravel application. It includes helper functions and classes to get and set settings.

## Installation

To install the package, you can use composer:

```bash
composer require firdavs9512/laravel-setting
```

### Publish Configuration and Migration

After installing the package, you need to publish the configuration file and migration.

```bash
php artisan vendor:publish --provider="Firdavs9512\LaravelSetting\LaravelSettingServiceProvider"
php artisan migrate
```

The first command publishes the configuration file to `config/laravel-setting.php` and the migration file for creating the settings table. The second command runs the migration to create the `laravel_settings` table.

## Configuration

The package provides a configuration file located at `config/laravel-setting.php` where you can customize various settings.

## Usage

### Setting and Getting Values

You can set and get settings using the `Firdavs9512\LaravelSetting\Setting` class. This class provides static methods `get` and `set`.

#### Setting a Value

```php
use Firdavs9512\LaravelSetting\Setting;

// Set a setting
Setting::set('site_name', 'My Awesome Site');
```

#### Getting a Value

```php
use Firdavs9512\LaravelSetting\Setting;

// Get a setting
$siteName = Setting::get('site_name', 'Default Site Name');
```

### Helper Function

The package also provides a helper function `setting`. This function allows you to get and set settings conveniently.

#### Getting a Setting Value

To get a setting value, pass the key as the first argument and an optional default value as the second argument.

```php
$siteName = setting('site_name', 'Default Site Name');
```

#### Setting a Value

To set a setting value, you need to use the `SettingHelper` class returned when no key is passed to the `setting` function.

```php
$settingHelper = setting();
$settingHelper->set('site_name', 'My Awesome Site');
```

### Example

Here is an example of how to use the package in a Laravel application:

```php
// Set a setting
setting()->set('site_name', 'My Awesome Site');

// Get a setting
$siteName = setting('site_name', 'Default Site Name');
```

## LaravelSettingServiceProvider

The `LaravelSettingServiceProvider` is responsible for bootstrapping the package's services. It publishes the configuration and migration files and merges the package configuration with the application's configuration.

## Migration

The package includes a migration file that creates a `settings` table. This table is used to store the application settings.

To create the `settings` table, run the following command after publishing the migration file:

```bash
php artisan migrate
```

## License

This package is open-source and licensed under the [MIT license](LICENSE).
