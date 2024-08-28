<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Modellizzazione>
 */
class ModellizzazioneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_paradati' => $this->faker->numberBetween(1,10), // Assume Paradata has a factory
            'responsabile' => $this->faker->name(),
            'operatore' => $this->faker->name(),
            'strumentazione' => $this->faker->word(),
            'data_inizio' => $this->faker->date(),
            'data_fine' => $this->faker->date(),
        ];
    }
}
