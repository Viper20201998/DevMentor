<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::table('role')->truncate();
        DB::table('role')->insert(
            [
                'name_role' => 'Alto',
            ]
        );
    }
}
