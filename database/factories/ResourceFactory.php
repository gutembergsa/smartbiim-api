<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resource>
 */
class ResourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'file_name' => fake()->name(),
            'manufacturer' =>  fake()->name(),
            'model' =>  fake()->name(),
            'serial_number' =>  fake()->number(),
            'acquisition_date' =>  now()
        ];
    }
}