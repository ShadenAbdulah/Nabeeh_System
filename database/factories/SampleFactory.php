<?php

namespace Database\Factories;

use App\Models\Sample;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sample>
 */
class SampleFactory extends Factory
{
    protected $model = Sample::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(6, 18),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'type' => $this->faker->randomElement(['ADHD', 'NADHD']),
            'another_disorder' => $this->faker->boolean ? 'Yes' : 'No',
            'another_disorder_name' => $this->faker->optional()->word,
            'supervisor_name' => $this->faker->name,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
