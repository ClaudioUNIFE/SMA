<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RenderParadata;

class RenderParadataFactory extends Factory
{
    protected $model = RenderParadata::class;

    public function definition(): array
    {
        return [
            'id_render' => $this->faker->numberBetween(1, 100),
        ];
    }
}
