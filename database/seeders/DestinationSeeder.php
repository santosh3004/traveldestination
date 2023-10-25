<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //multiple db insertion seeder
        DB::table('destinations')->insert([
            'name' => 'Nepal',
            'cities' => '3',
            
        ]);
        DB::table('destinations')->insert([
            'name' => 'Thailand',
            'cities' => '5',
        ]);
        DB::table('destinations')->insert([
            'name' => 'Japan',
            'cities' => '4',
        ]);
    }
}
