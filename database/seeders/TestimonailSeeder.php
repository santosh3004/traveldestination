<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=3;$i++){
        DB::table('testimonials')->insert([
            'name' => fake()->name(),
            'profession' => fake()->jobTitle(),
            'comment' => fake()->sentence(),
            'img'=>'testimonial-'.$i.'.jpg',
        ]);
    }
    }
}
