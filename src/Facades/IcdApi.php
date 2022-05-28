<?php

namespace Sawirricardo\IcdApi\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sawirricardo\IcdApi\IcdApi
 */
class IcdApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-icd-api';
    }
}
