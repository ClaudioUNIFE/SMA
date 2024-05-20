<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Gigapixel;

class GigapixelFactory extends Factory
{
    protected $model = Gigapixel::class;

    public function definition(): array
    {
        return [
            'id_reperto' => $this->faker->numberBetween(1, 100),
            'gigapixel_file' => $this->faker->text(),
        ];
    }
}
