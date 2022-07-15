<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Documents_employee>
 */
class Documents_employeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fichier' => fake()->file($sourceDir, $targetDir, false),
            'date_expiration' => fake()->date($format = 'd-m-Y', $max = '+3 years'),
        ];
    }
}
