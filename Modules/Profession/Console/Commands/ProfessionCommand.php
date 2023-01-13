<?php

namespace Modules\Profession\Console\Commands;

use Illuminate\Console\Command;

class ProfessionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ProfessionCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Profession Command description';

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
