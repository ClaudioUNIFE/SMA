<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Deposit;
use App\Models\Museum;

class Thesis extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_museo',
        'id_deposito',
        'autore',
        'titolo',
        'anno_accademico',
        'disciplina',
        'relatore',
        'correlatore',
        'contro_relatore',
        'percorso_file',
        'note'
    ];


    public function deposit()
    {
        return $this->belongsTo(Deposit::class, 'id_deposito');
    }

    public function museum()
    {
        return $this->belongsTo(Museum::class, 'id_museo');
    }
}

