<?php

namespace Modules\Artist\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Artist;

class ArtistDatabaseSeeder extends Seeder
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
         * Artists Seed
         * ------------------
         */

        // DB::table('artists')->truncate();
        // echo "Truncate: artists \n";

        Artist::factory()->count(20)->create();
        $rows = Artist::all();
        echo " Insert: artists \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
