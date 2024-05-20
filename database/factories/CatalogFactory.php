<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Catalog;
class CatalogFactory extends Factory
{
    protected $model = Catalog::class;
    public function definition(): array
    {
        return [

            'catalogo' => $this->faker->text(),
            'iccd' => $this->faker->text(),
            'pater' => $this->faker->text(),
            'vecchio_db' => $this->faker->text(),
        ];
    }
}
