<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Museum extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_museo',
    ];

    public function user(){
        return $this->hasMany(User::class);
    }
}
