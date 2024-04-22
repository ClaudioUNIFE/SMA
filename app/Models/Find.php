<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Find extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_museo',
        'id_vecchio',
        'descrizione',
        'note',
        'esposto',
        'digitalizzato',
        'catalogato',
        'restaurato',
        'id_catalogo',
        'id_deposito',
        'id_collezione',
        'validato',
        'tipo_entita',
        'categoria',
    ];
}
