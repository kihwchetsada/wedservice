<?php

namespace Database\Factories;

use App\Models\Province;
use App\Models\Title;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title_id'=> Title::inRandomOrder()->first()->id,
            'name' => $this->faker->name,
            'surname' => $this->faker->lastName,
            'email' => $this->faker->email,
            'province_id'=> Province::inRandomOrder()->first()->id,
            'created_at'=> now() ,
        ];
    }
}
