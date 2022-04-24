<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' => $this->faker->image,
            'event_id' => random_int(1,50),
            'title' => $this->faker->sentence(5),
            'description' => $this->faker->sentence(random_int(10,30)),
        ];
    }
}
