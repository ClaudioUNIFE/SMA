<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Find;
use App\Models\Thesis;
use App\Models\SMA;

class Museum extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_museo',
    ];

    public function Find()
    {
        return $this->belongsTo(Find::class);
    }

    public function Thesis()
    {
        return $this->hasMany(Thesis::class);
    }

    public function SMA()
    {
        return $this->belongsTo(SMA::class);
    }
}
