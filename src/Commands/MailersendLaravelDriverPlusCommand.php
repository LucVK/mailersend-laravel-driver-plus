<?php

namespace Lucvk\MailersendLaravelDriverPlus\Commands;

use Illuminate\Console\Command;

class MailersendLaravelDriverPlusCommand extends Command
{
    public $signature = 'mailersend-laravel-driver-plus';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
