<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Podcast>
 */
class PodcastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->sentence(1),
            'description'=>$this->faker->paragraph(2),
            'image'=>$this->faker->imageUrl(),
            'slug'=>$this->faker->slug(),
            'category_id'=>$this->faker->randomDigit(1,10),
            'interviewee_id'=>$this->faker->randomDigit(1,10),
        ];
    }
}
