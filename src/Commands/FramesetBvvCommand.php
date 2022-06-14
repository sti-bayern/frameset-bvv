<?php

namespace Stia\FramesetBvv\Commands;

use Illuminate\Console\Command;

class FramesetBvvCommand extends Command
{
    public $signature = 'frameset-bvv';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
