<?php

namespace Codecycler\Changelog\Commands;

use Illuminate\Console\Command;

class ChangelogCommand extends Command
{
    public $signature = 'laravel-changelog';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
