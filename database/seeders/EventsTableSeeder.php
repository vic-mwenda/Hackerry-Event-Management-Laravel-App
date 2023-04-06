<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EventsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $faker = \Faker\Factory::create();
        DB::table('events')->truncate();
        foreach (range(1,50)as $index) {
            DB::table('events')->insert([
                'name' => $faker->sentence(2),
                'city' => $faker->city,
                'venue' => $faker->company,
                'description' => $faker->paragraphs(1,true)
            ]);
        }

    }
}
