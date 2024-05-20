<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\GigapixelParadata;
class GigapixelParadataFactory extends Factory
{
    protected $model = GigapixelParadata::class;

    public function definition(): array
    {
        return [
            'id_gigapixel' => $this->faker->numberBetween(1, 100),
        ];
    }
}
