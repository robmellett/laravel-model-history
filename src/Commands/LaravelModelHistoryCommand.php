<?php

namespace RobMellett\LaravelModelHistory\Commands;

use Illuminate\Console\Command;

class LaravelModelHistoryCommand extends Command
{
    public $signature = 'laravel-model-history';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
