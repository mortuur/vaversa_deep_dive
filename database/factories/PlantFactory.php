<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plant>
 */
class PlantFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        $PlantCollection = collect([
            'parsley',
            'huacataycito',
            'Chervil',
            'basilic',
            'sorrel',
        ]);


        return [
            'name' => $PlantCollection->random(),
            'added_date' => $this->faker->dateTimeBetween('23-11-2022', '01-01-2023')
        ];
    }
}
