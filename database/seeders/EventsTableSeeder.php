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
        DB::table('events')->truncate();
        DB::table('events')->insert([
            'name' => "Laravel and Coffee",
            'city' => "Dublin",
            'venue' => "Cup of Joe",
            'description' => "Let's learn Laravel together!"
        ]);
        DB::table('events')->insert([
            'name' => "IoT and the Raspberry Pi",
            'city' => "Columbus",
            'venue' => "Columbus Library",
            'description' => "Weather monitoring with the Pi"
        ]);
    }
}
