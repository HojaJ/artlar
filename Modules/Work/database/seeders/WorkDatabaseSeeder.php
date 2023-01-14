<?php

namespace Modules\Work\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Work;

class WorkDatabaseSeeder extends Seeder
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
         * Works Seed
         * ------------------
         */

        // DB::table('works')->truncate();
        // echo "Truncate: works \n";

        Work::factory()->count(20)->create();
        $rows = Work::all();
        echo " Insert: works \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
