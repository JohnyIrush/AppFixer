<?php

namespace Database\Seeders;

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
        App\Version::truncate();
        App\Version::create(['version'=>'Basic']);
        App\Version::create(['version'=>'Standard']);
        App\Version::create(['version'=>'Pro']);
    }
}
