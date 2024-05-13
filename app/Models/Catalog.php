<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Find;

class Catalog extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_reperto',
        'catalogo',
        'iccd',
        'pater',
        'vecchio_db',
    ];

    public function Find()
    {
        return $this->belongsToMany(Find::class);
    }
}
