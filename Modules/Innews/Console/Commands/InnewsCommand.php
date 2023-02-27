<?php

namespace Modules\Innews\Console\Commands;

use Illuminate\Console\Command;

class InnewsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:InnewsCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Innews Command description';

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
