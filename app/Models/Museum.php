<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Find;
use App\Models\Thesis;
use App\Models\SMA;

class Museum extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_museo',
    ];

    public function user(){
        return $this->hasMany(User::class);
    }



    public function thesis()
    {
        return $this->hasMany(Thesis::class);
    }

    public function sma()
    {
        return $this->belongsTo(SMA::class);
    }
}
