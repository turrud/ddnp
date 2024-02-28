<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\ProArchitectur;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProArchitecturFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProArchitectur::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'imgurl' => $this->faker->text(255),
            'text' => $this->faker->text(),
            'video' => $this->faker->text(255),
            'url' => $this->faker->url(),
        ];
    }
}
