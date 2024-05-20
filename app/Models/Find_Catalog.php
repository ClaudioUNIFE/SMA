<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Find_Catalog extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_reperto',
        'id_catalogo'
    ];



    public function find()
    {
        return $this->belongsTo(Find::class, 'id_reperto');
    }
    public function catalog()
    {
        return $this->belongsTo(Catalog::class, 'id_catalogo');
    }
}
