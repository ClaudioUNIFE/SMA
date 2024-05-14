<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GigapixelParadara;

class Gigapixel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_reperto',
        'gigapixel_file',
    ];
    public function Find(){
        return $this->belongsTo(Find::class, 'id_reperto');
    }

    public function gigapixelParadata()
    {
        return $this->hasOne(GigapixelParadata::class);
    }
}
