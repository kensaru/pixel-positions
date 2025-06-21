<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
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
            'name' => fake()->jobTitle,
            'logo' => fake()->imageUrl,


        ];
    }
}
