<?php

namespace ScaleXY\LaravelTypst\Commands;

use Illuminate\Console\Command;

class LaravelTypstCommand extends Command
{
    public $signature = 'laravel-typst';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
