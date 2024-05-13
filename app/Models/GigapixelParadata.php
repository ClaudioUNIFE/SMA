<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gigapixel;

class GigapixelParadata extends Model
{
    use HasFactory;

    public function Gigapixel()
    {
        return $this->belongsTo(Gigapixel::class);
    }
}


