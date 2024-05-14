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
    public function Find(){
        return this->belongsTo(Find::class, 'id_reperto');
    }
    public function Paradata(){
        return this->hasOne(RenderParadata::class);
    }
}
