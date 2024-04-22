<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{
    use HasFactory;

    protected $fillable = ['id_deposito',
                            'autore',
                            'titolo',
                            'anno_accademico',
                            'disciplina',
                            'relatore',
                            'correlatore',
                            'contro_relatore',
                            'percorso_file',
                            'note'];
}

