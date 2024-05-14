<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Find;

class Xit extends Model
{
    use  HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_reperto',
        'uscita_reperto',
        'motivazione',
        'sede_temporanea',
        'data_uscita',
        'data_entrata',
    ];

    public function Find()
    {
        return $this->belongsTo(Find::class, 'id_reperto');
    }
}
