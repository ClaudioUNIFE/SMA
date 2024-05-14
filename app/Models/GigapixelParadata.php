<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gigapixel;

class GigapixelParadata extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_gigapixel',

    ];



    public function gigapixel()
    {
        return $this->belongsTo(Gigapixel::class, 'id_gigapixel');
    }
}


