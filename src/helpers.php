<?php

use Sawirricardo\IcdApi\IcdApi as Client;
use Sawirricardo\IcdApi\Laravel\Facades\IcdApi;

if (! function_exists('icdApi')) {
    /**
     * Get the IcdApi instance.
     */
    function icdApiClient(): Client
    {
        return app(IcdApi::class)::client();
    }
}
