<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BiologicalEntity;

class BiologicalEntityFactory extends Factory
{
    protected $model = BiologicalEntity::class;
    public function definition(): array
    {
        return [
            'id_reperto' => $this->faker->numberBetween(1, 100),
            'olotipo'  => $this->faker->boolean(false),
            'riferimento_tassonomico' => $this->faker->text(),
            'nome_comune' => $this->faker->text(),
            'taxon_group' => $this->faker->text(),
            'riferimento_cronologico' => $this->faker->text(),
        ];
    }
}
