<?php

namespace Modules\Innews\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Innews;

class InnewsDatabaseSeeder extends Seeder
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
         * Innews Seed
         * ------------------
         */

        // DB::table('innews')->truncate();
        // echo "Truncate: innews \n";

        Innews::factory()->count(20)->create();
        $rows = Innews::all();
        echo " Insert: innews \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
