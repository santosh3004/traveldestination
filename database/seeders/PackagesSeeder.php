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

            DB::table('packages')->insert([
                'destination' => 'Nepal',
                'duration' => '3',
                'price' => '1000',
                'description' => 'Nepal is a beautiful country',
                'destination_id' => '1',
            ]);
            DB::table('packages')->insert([
                'destination' => 'Thailand',
                'duration' => '5',
                'price' => '2000',
                'description' => 'Thailand is a beautiful country',
                'destination_id' => '2',
            ]);
            DB::table('packages')->insert([
                'destination' => 'Japan',
                'duration' => '4',
                'price' => '3000',
                'description' => 'Japan is a beautiful country',
                'destination_id' => '3',
            ]);
    }
}
