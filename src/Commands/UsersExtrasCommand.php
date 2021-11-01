<?php

namespace TheGeekEnginner\UsersExtras\Commands;

use Illuminate\Console\Command;

class UsersExtrasCommand extends Command
{
    public $signature = 'usersextras';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
