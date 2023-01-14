<?php

namespace Modules\Movement\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Movement;

class MovementDatabaseSeeder extends Seeder
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
         * Movements Seed
         * ------------------
         */

        // DB::table('movements')->truncate();
        // echo "Truncate: movements \n";

        Movement::factory()->count(20)->create();
        $rows = Movement::all();
        echo " Insert: movements \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
