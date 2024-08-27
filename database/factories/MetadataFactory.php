<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Metadata>
 */
class MetadataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_allegato' => numberBetween(1, 100),
            'codice_reperto' => numberBetween(1, 100),
            'titolo' => $this->faker->sentence(),
            'autore' => $this->faker->name(),
            'sogetto' => $this->faker->word(),
            'descrizione' => $this->faker->paragraph(),
            'editore' => $this->faker->company(),
            'autore_di_contributo' => $this->faker->name(),
            'data' => $this->faker->date(),
            'tipo' => $this->faker->word(),
            'formato' => $this->faker->fileExtension(),
            'identificatore' => $this->faker->isbn13(),
            'fonte' => $this->faker->url(),
            'lingua' => $this->faker->languageCode(),
            'relazione' => $this->faker->paragraph(),
            'copertura' => $this->faker->word(),
            'gestione_dei_diritti' => $this->faker->sentence(),
        ];
    }
}
