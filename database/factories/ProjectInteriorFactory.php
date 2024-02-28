<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\ProjectInterior;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectInteriorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProjectInterior::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'text' => $this->faker->text(),
            'imgurl' => $this->faker->text(255),
            'video' => $this->faker->text(255),
            'url' => $this->faker->url(),
        ];
    }
}
