<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog;
use App\Models\Xit;
use App\Models\Museum;

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

    public function Catalog()
    {
        return $this->belongsToMany(Catalog::class);
    }

    public function Xit()
    {
        return $this->hasMany(Xit::class, 'id_reperto');
    }

    public function Museum()
    {
        return $this->hasMany(Museum::class, 'id_museo');
    }
}
