<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Interviewee>
 */
class IntervieweeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstName'=>$this->faker->firstName(),
            'secondName'=>$this->faker->lastName(),
            'image'=>$this->faker->imageUrl(),
            'is_verified'=>$this->faker->boolean(),
            'socialmedia_id'=>$this->faker->unique()->randomDigit(1,10),
        ];
    }
}
