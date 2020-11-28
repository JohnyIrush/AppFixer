<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->truncate();
        DB::table('services_version')->truncate();
        DB::table('services')->insert([
            'service'=>'hosting',
            'price'=>50
            ]);
        DB::table('services')->insert([
            'service'=>'seo',
            'price'=>20
            ]);      
        DB::table('services')->insert([
            'service'=>'security',
            'price'=>70
            ]);
        DB::table('services')->insert([
            'service'=>'management',
            'price'=>20
            ]);

    }
}
