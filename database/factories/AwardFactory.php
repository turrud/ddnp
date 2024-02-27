<?php

namespace Database\Factories;

use App\Models\Award;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class AwardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Award::class;

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
            'tanggal' => $this->faker->text(255),
            'lokasi' => $this->faker->text(255),
            'imgurl' => $this->faker->text(255),
            'video' => $this->faker->text(255),
        ];
    }
}
