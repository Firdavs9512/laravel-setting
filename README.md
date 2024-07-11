# Laravel Setting Package

The `laravel-setting` package provides an easy way to manage application settings in a Laravel application. It includes helper functions and classes to get and set settings.

## Installation

To install the package, you can use composer:

```bash
composer require firdavs9512/laravel-setting
```

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

## License

This package is open-source and licensed under the [MIT license](LICENSE).
