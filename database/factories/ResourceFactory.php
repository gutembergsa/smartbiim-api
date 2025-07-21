<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ResourceFactory extends Factory
{

    public function definition(): array
    {
        return [
            'resource_name' => fake()->name(),
            'manufacturer' =>  fake()->name(),
            'model' =>  fake()->name(),
            'serial_number' =>  fake()->number(),
            'acquisition_date' =>  now()
        ];
    }
}