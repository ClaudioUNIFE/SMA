<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Museum;

class SMA extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_museo',
    ];

    public function museum()
    {
        return $this->hasMany(Museum::class, 'id_museo');
    }
}
