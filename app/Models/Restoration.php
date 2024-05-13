<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Find;

class Restoration extends Model
{
    use HasFactory;

    protected $fillable =[
        'id_reperto',
        'data_valutazione',
        'necessita_di_restauro',];

        public function find(){
            return $this->belongsTo(Find::class, 'id_reperto');
        }

        
}
