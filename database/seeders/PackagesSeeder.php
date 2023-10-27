<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for( $i=1; $i<=3; $i++){
            DB::table('packages')->insert([
                'persons'=>fake()->numberBetween(1,10),
                'duration' => '3',
                'price' => fake()->numberBetween(100,3000),
                'description' => fake()->sentence(),
                'destination_id' => $i,
                'img'=>'package-'.$i.'.jpg',
            ]);
        }
    }
}
