<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\RenderParadata;

class Render extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_reperto',
        'render_file',
    ];
    public function find(){
        return this->belongsTo(Find::class, 'id_reperto');
    }
    public function renderparadata(){
        return this->hasOne(RenderParadata::class);
    }
}
