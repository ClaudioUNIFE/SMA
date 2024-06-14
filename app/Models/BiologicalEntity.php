<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Find;

class BiologicalEntity extends Model
{
    use HasFactory; 
    protected $fillable = [
        'id_reperto',
        'olotipo',
        'riferimento_tassonomico',
        'nome_comune',
        'taxon_group',
        'riferimento_cronologico',
    ];

    public function find(){
        return $this->belongsTo(Find::class, 'id_reperto');
    }

}
