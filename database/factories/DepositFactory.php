<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Deposit;
class DepositFactory extends Factory
{
    protected $model = Deposit::class;
    public function definition(): array
    {
        return [
            'collocazione' => $this->faker->text(),
            'deposito' => $this->faker->text(),
            'codice_stanza' => $this->faker->text(),
        ];
    }
}
