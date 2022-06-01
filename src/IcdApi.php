<?php

namespace Sawirricardo\IcdApi\Laravel;

use Illuminate\Contracts\Config\Repository;
use Sawirricardo\IcdApi\IcdApi as Client;

class IcdApi
{
    private $config;

    public function __construct(Repository $config)
    {
        $this->config = $config['icd-api'];
    }

    public static function ectStyles()
    {
        return '<link rel="stylesheet" href="https://icdcdn.who.int/embeddedct/icd11ect-1.5.css">';
    }

    public static function ectScripts()
    {
        return '<script src="https://icdcdn.who.int/embeddedct/icd11ect-1.5.js" defer></script>';
    }

    public function client(): Client
    {
        return new Client(
            $this->config['client_id'],
            $this->config['client_secret'],
        );
    }
}
