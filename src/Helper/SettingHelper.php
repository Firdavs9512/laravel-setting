<?php

namespace Firdavs9512\LaravelSetting\Helper;

use Illuminate\Support\Facades\DB;

class SettingHelper
{
    protected $table = 'settings';
    public function __construct()
    {
        $prefix = config('laravel-setting.table_prefix');
        $this->table = $prefix . "_settings";
    }

    public function set(string $key, $value)
    {
        // Check old value exists or not
        $old = DB::table($this->table)->where('key', $key)->first();

        $value = serialize($value);

        if ($old) {
            // Update old value
            DB::table($this->table)->where('key', $key)->update(['value' => $value]);
        } else {
            // Insert new value
            DB::table($this->table)->insert(['key' => $key, 'value' => $value]);
        }
    }

    public function get(string $key, $default = null)
    {
        // Check cache enabled and key exists in cache
        $key = "laravel-setting-" . $key;
        if (config('laravel-setting.cache.enabled') && cache()->has($key)) {
            return cache($key);
        }

        // Get value from database
        $value = DB::table($this->table)->where('key', $key)->first();

        if (!$value) {
            return $default;
        }

        try {
            $value = unserialize($value->value);
        } catch (\Exception $e) {
            return $default;
        }

        // Cache value
        if (config('laravel-setting.cache.enabled')) {
            cache([$key => $value], config('laravel-setting.cache.expiration'));
        }

        return $value;
    }
}