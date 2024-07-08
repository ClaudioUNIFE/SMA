<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acquisition;
use App\Models\Composition;
use App\Models\Render;
use App\Models\Gigapixel;
use App\Models\Deposit;
use App\Models\Collection;
use App\Models\Restoration;
use App\Models\Museum;
use App\Models\BiologicalEntity;
use App\Models\Catalog;
use App\Models\Xit;
use Illuminate\Support\Facades\DB;

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
        'id_deposito',
        'id_collezione',
        'validato',
        'categoria',
        'gigapixel_flag',
        'rendeer_flag',
        'cartellino_storico',
        'cartellino_attuale',
        'foto_principale',
        'didascalia',
    ];

    public function acquisition(){
        return $this->hasOne(Acquisition::class);
    }

    public function composition(){
        return $this->hasOne(Composition::class);
    }

    public function render(){
        return $this->hasMany(Render::class);
    }

    public function gigapixel(){
        return $this->hasMany(Gigapixel::class, 'id_reperto');
    }

    public function deposit(){
        return $this->belongsTo(Deposit::class, 'id_deposito');
    }

    public function restoration(){
        return $this->hasMany(Restoration::class);
    }

    public function collection(){
        return $this->belongsTo(Collection::class, 'id_collezione');
    }

    public function biologicalEntity(){
        return $this->hasOne(BiologicalEntity::class, 'id_reperto');
    }

    public function catalog()
    {
        return $this->belongsToMany(Catalog::class, 'id_catalogo');
    }

    public function xit()
    {
        return $this->hasMany(Xit::class);
    }

    public static function getUtilsforCard(){
        return DB::table('finds')
        ->join('biological_entities', 'finds.id', '=', 'biological_entities.id_reperto')
        ->select('*')
        ->get();
    }


}
