<?php

use Lerouse\LaravelChangeControl\Version;

if (!function_exists('version')) {

    function version(): Version
    {
        return new Version;
    }

}