<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'plant_id'=> 1,
            'description'=> $this->faker->text(150),
            'due_date' => $this->faker->dateTimeBetween('23-11-2022', '01-01-2023'),
            'is_completed' => $this->faker->numberBetween(0,1)
        ];
    }
}
