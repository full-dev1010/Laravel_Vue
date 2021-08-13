<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $possibleLocations = ['Linz', 'Vienna', 'Graz', 'Salzburg', 'Innsbruck'];

        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->text,
            'location' => $possibleLocations[array_rand($possibleLocations, 1)],
            'active' => $this->faker->boolean,
            'created_at' => now()->subDays(rand(1, 20))
        ];
    }
}
