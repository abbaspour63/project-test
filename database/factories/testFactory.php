<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\test>
 */
class testFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $persianFaker = \Faker\Factory::create('fa_IR');
        return [
            'name'=>$persianFaker->name(),
            'family'=>$this->faker->text(),
            'age'=>$this->faker->numberBetween(1,100)
        ];
    }
}
