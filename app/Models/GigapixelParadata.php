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

    protected $fillable = [
        'id_gigapixel',

    ];

    public function Gigapixel()
    {
        return $this->belongsTo(Gigapixel::class, 'id_gigapixel');
    }
}


