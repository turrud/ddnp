<?php

namespace Database\Factories;

use App\Models\Partner;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Partner::class;

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
            'url' => $this->faker->url(),
            'video' => $this->faker->text(255),
        ];
    }
}
