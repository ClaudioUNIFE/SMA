<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Find;

class FindFactory extends Factory
{
    protected $model = Find::class;

    public function definition(): array
    {
        return [
            'id_museo' => $this->faker->numberBetween(1, 100),
            'id_vecchio' => $this->faker->numberBetween(10000,99999),
            'descrizione' => $this->faker->text(),
            'note' => $this->faker->text(),
            'esposto' => $this->faker->boolean(false),
            'digitalizzato' => $this->faker->boolean(false),
            'catalogato' => $this->faker->boolean(false),
            'restaurato' => $this->faker->boolean(false),
            'id_deposito' => $this->faker->numberBetween(1, 100),
            'id_collezione' => $this->faker->numberBetween(1, 100),
            'validato' => $this->faker->boolean(false),
            'categoria' => $this->faker->text(),
            'gigapixel_flag' => $this->faker->boolean(false),
            'render_flag' => $this->faker->boolean(false),
            'cartellino_storico' => $this->faker->text(),
            'cartellino_attuale' => $this->faker->text(),
            'foto_principale' => $this->faker->text(),
        ];
    }
}
