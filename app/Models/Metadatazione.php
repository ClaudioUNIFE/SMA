<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metadatazione extends Model
{
    use HasFactory;

    protected $table ='metadatazioni';

    protected $fillable = [
        'id_paradati',
       'responsabile',
        'operatore',
        'data_inizio',
        'data_fine',
    ];


    public function paradata()
    {
        return $this->belongsTo(Paradata::class, 'id_paradati');
    }
}
