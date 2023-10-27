<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for( $i=1; $i<=3; $i++){
        DB::table('guides')->insert([
            'name' => fake()->name(),
            'designation' => 'Tour Guide',
            'img'=>'team-'.$i.'.jpg',
        ]);
    }
    }
}
