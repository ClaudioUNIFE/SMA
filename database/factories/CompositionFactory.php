<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Composition;

class CompositionFactory extends Factory
{
    protected $model = Composition::class;

    public function definition(): array
    {
        return [
            'id_reperto' => $this->faker->numberBetween(1, 100),
            'multiplo' => $this->faker->boolean(false),
            'molteplicita' => $this->faker->numberBetween(1, 1),
            'originale' => $this->faker->boolean(),
            'fossile' => $this->faker->boolean(),
            'materiale' => $this->faker->text(),
        ];
    }
}
