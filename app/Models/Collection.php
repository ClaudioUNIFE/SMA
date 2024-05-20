<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Find;

class Collection extends Model
{
    use HasFactory;
    protected $fillable = [
        'data_acquisizione_collezione',
        'descrizione',
        'nome_collezione'
    ];


    public function find()
    {
        return $this->hasMany(Find::class);
    }
}
