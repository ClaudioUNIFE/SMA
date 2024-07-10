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
        'molteplicita',
        'originale',
        'fossile',
        'materiale',
    ];
    public function find(){
        return $this->belongsTo(Find::class, 'id_reperto');
    }
}
 