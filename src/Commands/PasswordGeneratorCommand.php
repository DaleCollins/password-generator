<?php

namespace DaleCollins\PasswordGenerator\Commands;

use Illuminate\Console\Command;

class PasswordGeneratorCommand extends Command
{
    public $signature = 'password-generator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
