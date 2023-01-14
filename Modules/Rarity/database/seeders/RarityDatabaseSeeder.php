<?php

namespace Modules\Rarity\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Rarity;

class RarityDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * Rarities Seed
         * ------------------
         */

        // DB::table('rarities')->truncate();
        // echo "Truncate: rarities \n";

        Rarity::factory()->count(20)->create();
        $rows = Rarity::all();
        echo " Insert: rarities \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
