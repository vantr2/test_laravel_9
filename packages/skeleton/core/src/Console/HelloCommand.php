<?php

namespace Skeleton\Core\Console;

use Illuminate\Console\Command;

class HelloCommand extends Command
{
    protected $signature = 'core:hello';
    protected $description = 'Say hello from core package';

    public function handle()
    {
        $this->info('Hello from Core Package!');
    }
}