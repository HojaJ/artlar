<?php

namespace Modules\Rarity\Console\Commands;

use Illuminate\Console\Command;

class RarityCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:RarityCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rarity Command description';

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
