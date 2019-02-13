<?php

namespace BasicStructeMod\Console;

use Carbon\Carbon;

/**
 * Class OrderIntegrationCommand
 * @package BasicStructeMod\Console
 */
class BasicCommand extends Command
{
    protected $name        = 'BasicStructeMod:console-name';
    protected $description = 'Description';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Init cron ' . $this->name);
    }

}
