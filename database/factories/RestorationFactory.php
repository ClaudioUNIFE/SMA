<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Restoration;

class RestorationFactory extends Factory
{
    protected $model = Restoration::class;

    public function definition(): array
    {
        return [
            'id_reperto' => $this->faker->numberBetween(1, 100),
            'data_valutazione' => $this->faker->date(),
            'necessita_di_restauro' => $this->faker->boolean(false),
        ];
    }
}
