<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Archiviazione>
 */
class ArchiviazioneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_paradati' => numberBetween(1,10),  // Assuming Paradata model has its own factory
            'responsabile' => $this->faker->name(),
            'operatore' => $this->faker->name(),
            'data_ultimo_becup' => $this->faker->date(),
            'data_inizio' => $this->faker->date(),
            'data_fine' => $this->faker->date(),
        ];
    }
}
