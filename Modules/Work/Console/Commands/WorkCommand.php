<?php

namespace Modules\Work\Console\Commands;

use Illuminate\Console\Command;

class WorkCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:WorkCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Work Command description';

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
