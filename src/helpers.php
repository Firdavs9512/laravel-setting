<?php

if (!function_exists('setting')) {
    /**
     * Get setting helper or setting value
     *
     * @param string|null $key
     * @param mixed $default
     *
     * @return mixed
     */
    function setting(?string $key = null, $default = null)
    {
        if (is_null($key)) {
            return new \Firdavs9512\LaravelSetting\Helper\SettingHelper();
        }

        return \Firdavs9512\LaravelSetting\Setting::get($key, $default);
    }
}
