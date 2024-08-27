<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_paradati',
        'responsabile',
        'operatore',
        'strumentazione',
        'data_inizio',
        'data_fine',
    ];



    public function paradata()
    {
        return $this->belongsTo(paradata::class, 'id_paradati');

    }

}
