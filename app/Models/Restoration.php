<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restoration extends Model
{
    use HasFactory;

    protected $fillable =[
        'id_reperto',
        'data_valutazione',
        'necessita_di_restauro',];
        
}
