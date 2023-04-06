<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'laravel and coffee',
            'published' => 1,
            'start' => "tomorrow",
            'max_attendees' =>'50',
            'venue' => 'nairobi',
            'description' => "Lets drink coffee"
        ];
    }
}
