<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Acquisition;
use App\Model\Composition;
use App\Model\Render;
use App\Model\Gigapixel;
use App\Model\Deposit;
use App\Model\Collection;
use App\Model\Restoreation;
use App\Model\Museum;
use App\Model\BiologicalEntity;

class Find extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_museo',
        'id_vecchio',
        'descrizione',
        'note',
        'esposto',
        'digitalizzato',
        'catalogato',
        'restaurato',
        'id_catalogo',
        'id_deposito',
        'id_collezione',
        'validato',
        'tipo_entita',
        'categoria',
    ];

    public function Aquisition(){
        return this->hasOne(Acquisition::class, 'id_find');
    }

    public function Compostion(){
        return this->hasOne(Composition::class, 'id_find');
    }

    public function Render(){
        return this->hasMany(Render::class, 'id_find');
    }

    public function Gigapixel(){
        return this->hasMany(Gigapixel::class, 'id_find');
    }

    public function deposit(){
        return $this->belongsTo(Deposit::class, 'id_deposito');
    }

    public function restoreation(){
        return $this->hasMany(Restoreation::class);
    }

    public function collection(){
        return $this->belongsTo(Collection::class, 'id_collezione');
    }

    public function biologicalEntity(){
        return $this->hasOne(BiologicalEntity::class);
    }





}
