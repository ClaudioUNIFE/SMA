<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Render;

class RenderParadata extends Model
{
    use HasFactory;
    protected $fillable = ['id_render'];

    public function render()
    {
        return $this->belongsTo(Render::class, 'id_render');
    }
}

