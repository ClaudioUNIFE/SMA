<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Xit;

class XitFactory extends Factory
{
    protected $model = Xit::class;

    public function definition(): array
    {
        return [
            'id_reperto' => $this->faker->numberBetween(1, 100),
            'uscita_reperto' => $this->faker->boolean(false),
            'motivazione' => $this->faker->text(),
            'sede_temporanea' => $this->faker->text(),
            'data_uscita' => $this->faker->date(),
            'data_entrata' => $this->faker->date(),
        ];
    }
}
