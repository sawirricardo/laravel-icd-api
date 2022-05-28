<?php

use Sawirricardo\IcdApi\Laravel\IcdApi;

if (! function_exists('icdApi')) {
    /**
     * Get the IcdApi instance.
     */
    function icdApi(): IcdApi
    {
        return app(IcdApi::class);
    }
}
