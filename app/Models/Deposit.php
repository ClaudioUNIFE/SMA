<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Find;
use App\Models\Thesis;

class Deposit extends Model
{
    use HasFactory;
    protected $fillable = [
        'collocazione',
        'deposito',
        'codice_stanza',
    ];

    public function find(){
        return $this->hasMany(Find::class);
    }

    public function thesis(){
        return $this->hasMany(Thesis::class);
    }
}
