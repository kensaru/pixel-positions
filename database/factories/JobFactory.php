<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //foreignids not needed as can be generated magically using the seeder the right way

            // https://laravel-news.com/recycle
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['$10,000', '$20,000', '$30,000', '$40,000', '$50,000']),
            'location' => fake()->city,
            'category' => fake()->randomElement(['full time', 'part time']),
            'url' => fake()->url,
            'featured' => fake()->randomElement([true, false]),

        ];
    }
}
