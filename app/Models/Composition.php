<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Composition extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_reperto',
        'multiplo',
        'originale',
        'fossile',
        'materiale',
    ];
    public function Find(){
        return this->belongsTo(Find::class, 'id_find');
    }
}
