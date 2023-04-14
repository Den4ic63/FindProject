<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CreateProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 50; $i++) {
            DB::table('projects')->insert([
                'name' => Str::random(10),
                'description' => Str::random(10),
                'office_id'=> $faker->numberBetween($min = 1, $max = 5),
            ]);
        }
    }
}
