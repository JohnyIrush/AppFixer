<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applications')->truncate();
        DB::table('applications')->insert([
             'image' => 'microsoft-edge.jpg',
             'name' => 'Microsoft-edge',
             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis accusantium exercitationem a, pariatur soluta alias.',
             'price' => 6,
             'logo' => 'microsoft-edge.jpg',
             'location' => '/',
             'discount' => 0
        ]);

        DB::table('applications')->insert([
            'image' => 'avast.png',
            'name' => 'Avast',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis accusantium exercitationem a, pariatur soluta alias.',
            'price' => 10,
            'logo' => 'avast.png',
            'location' => '/',
            'discount' => 0
       ]);

       DB::table('applications')->insert([
        'image' => 'windows-10.jpg',
        'name' => 'Microsoft Windows 10',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis accusantium exercitationem a, pariatur soluta alias.',
        'price' => 10,
        'logo' => 'windows-10.jpg',
        'location' => '/',
        'discount' => 0 
       ]);
       DB::table('applications')->insert([
        'image' => 'cybersecurity.jpg',
        'name' => 'cyber security',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis accusantium exercitationem a, pariatur soluta alias.',
        'price' => 6,
        'logo' => 'cybersecurity.jpg',
        'location' => '/',
        'discount' => 0 
   ]);

   DB::table('applications')->insert([
       'image' => 'comp.jpg',
       'name' => 'Computer',
       'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis accusantium exercitationem a, pariatur soluta alias.',
       'price' => 10,
       'logo' => 'comp.jpg',
       'location'  => '/',
       'discount' => 0
  ]);

  DB::table('applications')->insert([
   'image' => 'binary.jpg',
   'name' => 'Binary',
   'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis accusantium exercitationem a, pariatur soluta alias.',
   'price' => 10,
   'logo' => 'binary.jpg',
   'location' => '/',
   'discount' => 0
  ]);
    }
}
