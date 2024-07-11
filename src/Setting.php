<?php

namespace Firdavs9512\LaravelSetting;

use Firdavs9512\LaravelSetting\Helper\SettingHelper;

class Setting
{
    /**
     * Get setting value by key
     *
     * @param string $key
     * @param mixed $default
     *
     * @return mixed
     */
    public static function get($key, $default = null)
    {
        $helper = new SettingHelper();

        return $helper->get($key, $default);
    }

    /**
     * Set setting value by key
     *
     * @param string $key
     * @param mixed $value
     *
     * @return void
     */
    public static function set($key, $value)
    {
        $helper = new SettingHelper();

        return $helper->set($key, $value);
    }
}
