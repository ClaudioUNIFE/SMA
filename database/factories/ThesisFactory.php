<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Thesis;

class ThesisFactory extends Factory
{
    protected $model = Thesis::class;
    
    public function definition(): array
    {
        return [
            'id_museo' => $this->faker->numberBetween(1, 100),
            'id_deposito' => $this->faker->numberBetween(1, 100),
            'autore' => $this->faker->name(),
            'titolo' => $this->faker->text(),
            'anno_accademico' => $this->faker->year(),
            'disciplina' => $this->faker->text(),
            'relatore' => $this->faker->text(),
            'correlatore' => $this->faker->text(),
            'contro_relatore' => $this->faker->text(),
            'percorso_file' => $this->faker->text(),
            'note' => $this->faker->text(),
        ];
    }
}
