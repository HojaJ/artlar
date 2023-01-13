<?php

namespace Modules\Profession\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Profession;

class ProfessionDatabaseSeeder extends Seeder
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
         * Professions Seed
         * ------------------
         */

        // DB::table('professions')->truncate();
        // echo "Truncate: professions \n";

        Profession::factory()->count(20)->create();
        $rows = Profession::all();
        echo " Insert: professions \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
