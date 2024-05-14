<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acquisition extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_reperto',
        'modalita_acquisizione',
        'data_inventario',
        'data_acquisizione',
        'proprieta',
        'codice_patrimonio',
        'provenienza',
    ];
    public function Find(){
        return this->belongsTo(Find::class, 'id_reperto');
    }
}
