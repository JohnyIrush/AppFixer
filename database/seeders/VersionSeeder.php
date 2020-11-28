<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('versions')->truncate();
        DB::table('versions')->insert(['version'=>'Basic']);
        DB::table('versions')->insert(['version'=>'Standard']);
        DB::table('versions')->insert(['version'=>'Pro']);

    }
}
