<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;
    protected $fillable = [
        'collocazione',
        'deposito',
        'cartellino_storico',
        'cartellino_attuale',
        'codice_stanza',
    ];
}
