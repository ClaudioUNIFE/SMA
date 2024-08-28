<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Metadatazione>
 */
class MetadatazioneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_paradati' => $this->faker->numberBetween(1, 100),
            'responsabile' => $this->faker->name(),
            'operatore' => $this->faker->name(),
            'data_inizio' => $this->faker->date(),
            'data_fine' => $this->faker->optional()->date(),
        ];
    }
}
