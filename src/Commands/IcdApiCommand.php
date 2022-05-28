<?php

namespace Sawirricardo\IcdApi\Laravel\Commands;

use Illuminate\Console\Command;

class IcdApiCommand extends Command
{
    public $signature = 'laravel-icd-api';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
