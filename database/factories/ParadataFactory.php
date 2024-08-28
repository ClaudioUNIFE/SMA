<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paradata>
 */
class ParadataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_allegato' => $this->faker->numberBetween(1, 100),
            'stato_corrente' => $this->faker->randomElement(['in_progress', 'completed']),
            'responsabile_scelta_reperto' => $this->faker->name(),
            'scheda_validata' => $this->faker->boolean(),
            'validatore_scheda' => $this->faker->name(),
            'note' => $this->faker->sentence(),
            'responsabile_acquisizione' => $this->faker->name(),
            'operatore' => $this->faker->name(),
            'tipo_superfice' => $this->faker->word(),
            'descrizione_complessita' => $this->faker->paragraph(),
            'fotocamera' => $this->faker->word(),
            'impostazioni' => $this->faker->word(),
            'obiettivo' => $this->faker->word(),
            'illuminazione' => $this->faker->word(),
            'light_box' => $this->faker->boolean(),
            'tipo_supporto' => $this->faker->word(),
            'numero_scatti' => $this->faker->numberBetween(1, 100),
            'software' => $this->faker->word(),
            'output' => $this->faker->word(),
            'strumentazione' => $this->faker->word(),
            'risoluzione' => $this->faker->word(),
            'modalita_scansione' => $this->faker->word(),
            'ingrandimento' => $this->faker->word(),
            'luminosita' => $this->faker->word(),
            'fibra_ottica' => $this->faker->boolean(),
            'tiling' => $this->faker->boolean(),
            'scala' => $this->faker->word(),
            'formato' => $this->faker->word(),
            'data_inizio' => $this->faker->date(),
            'data_fine' => $this->faker->date(),
            'tempo_totale' => $this->faker->word(),
            'luogo_acquisizione' => $this->faker->city(),
            'temperatura' => $this->faker->randomFloat(2, 10, 40),
            'condizioni_iniziali_conservazione' => $this->faker->paragraph(),
            'condizioni_finali_conservazione' => $this->faker->paragraph(),
        ];
    }
}
