<?php

namespace Database\Factories;

use App\Models\employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id'=>employer::factory(),
            'title'=> fake()->jobTitle,
            'salary'=> fake()->randomElement(['10,000$' , '30,000$' , '50,000$' , '60,000$' , '100,000$']),
            'location'=>'remote',
            'schedule'=> 'Full Time' ,
            'url' => fake()->url,
            'featured'=> false
        ];
    }
}
