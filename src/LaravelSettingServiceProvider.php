<?php

namespace Firdavs9512\LaravelSetting;

use Illuminate\Support\ServiceProvider;

class LaravelSettingServiceProvider extends ServiceProvider
{
  public function boot()
  {
    $this->publishes([
      __DIR__ . '/../config/laravel-setting.php' => config_path('laravel-setting.php'),
    ], 'config');

    $this->publishes([
      __DIR__ . '/../database/migrations/create_settings_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_settings_table.php'),
    ], 'migrations');
  }

  public function register()
  {
    $this->mergeConfigFrom(__DIR__ . '/../config/laravel-setting.php', 'laravel-setting');
  }
}
