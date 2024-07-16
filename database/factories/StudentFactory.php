<?php

namespace Database\Factories;

use App\Models\Province;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() : array
    {
        return [
            'name' => $this->faker->name,
            'surname' => $this->faker->lastName,
            'email' => $this->faker->email,
            'province_id'=> Province::inRandomOrder()->first()->id,
            'created_at'=> now() ,
           
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * 
     */

}
