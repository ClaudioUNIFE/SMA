<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Museum;


class MuseumFactory extends Factory
{
    protected $model = Museum::class;

    public function definition(): array
    {
        return [
            'nome_museo' => $this->faker->name(),
        ];
    }
}
