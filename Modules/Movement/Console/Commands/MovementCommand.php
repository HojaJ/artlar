<?php

namespace Modules\Movement\Console\Commands;

use Illuminate\Console\Command;

class MovementCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:MovementCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Movement Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
