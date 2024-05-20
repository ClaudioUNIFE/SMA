<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Render;

class RenderFactory extends Factory
{
    protected $model = Render::class;
    
    public function definition(): array
    {
        return [
            'id_reperto' => $this->faker->numberBetween(1, 100),
            'render_file' => $this->faker->text(),
        ];
    }
}
