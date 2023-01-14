<?php

namespace Modules\Medium\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Medium;

class MediumDatabaseSeeder extends Seeder
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
         * Media Seed
         * ------------------
         */

        // DB::table('media')->truncate();
        // echo "Truncate: media \n";

        Medium::factory()->count(20)->create();
        $rows = Medium::all();
        echo " Insert: media \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
