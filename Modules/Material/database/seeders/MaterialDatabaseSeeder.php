<?php

namespace Modules\Material\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Material;

class MaterialDatabaseSeeder extends Seeder
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
         * Materials Seed
         * ------------------
         */

        // DB::table('materials')->truncate();
        // echo "Truncate: materials \n";

        Material::factory()->count(20)->create();
        $rows = Material::all();
        echo " Insert: materials \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
