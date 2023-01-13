<?php

namespace Modules\Artist\Console\Commands;

use Illuminate\Console\Command;

class ArtistCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ArtistCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Artist Command description';

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
