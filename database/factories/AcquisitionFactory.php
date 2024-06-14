<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Acquisition;


class AcquisitionFactory extends Factory
{

    protected $model = Acquisition::class;
    public function definition(): array
    {
        return [
            'id_reperto' => $this->faker->numberBetween(1, 100),
            'modalita_acquisizione' => $this->faker->text(),
            'data_inventario' => $this->faker->date(),
            'data_acquisizione' => $this->faker->date(),
            'proprieta' => $this->faker->text(),
            'codice_patrimonio' => $this->faker->text(),
            'provenienza' => $this->faker->text(),
            'fornitore' => $this->faker->text(),
        ];
    }
}
