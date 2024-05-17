<?php

namespace Database\Factories;

use App\Models\SMA;
use Illuminate\Database\Eloquent\Factories\Factory;

class SMAFactory extends Factory
{
    protected $model = SMA::class;

    public function definition()
    {
        return [
            'id_museo' => $this->faker->numberBetween(1, 100),
        ];
    }
}
