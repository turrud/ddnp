<?php

namespace Database\Factories;

use App\Models\Method;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class MethodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Method::class;

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
        ];
    }
}
