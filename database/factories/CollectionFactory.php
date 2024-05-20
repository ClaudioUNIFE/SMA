<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Collection;

class CollectionFactory extends Factory
{
    protected $model = Collection::class;

    public function definition(): array
    {
        return [
            'data_acquizione_collezione' => $this->faker->date(),
            'descrizione' => $this->faker->text(),
            'nome_collezione' => $this->faker->text(),
        ];
    }
}
