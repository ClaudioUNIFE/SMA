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
        'render_flag',
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
        return $this->hasOne(Catalog::class, 'id_reperto');
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


    public static function getUtilsforFindForm($id){
        $find = DB::table('finds')
            ->join('biological_entities', 'finds.id', '=', 'biological_entities.id_reperto')
            ->join('collections', 'finds.id_collezione', '=', 'collections.id')
            ->join('deposits', 'finds.id_deposito', '=', 'deposits.id')
            ->join('catalogs', 'finds.id', '=', 'catalogs.id_reperto')
            ->join('compositions', 'finds.id', '=', 'compositions.id_reperto')
            ->join('acquisitions', 'finds.id', '=', 'acquisitions.id_reperto')
            // ->join('restorations', 'finds.id', '=','restorations.id_reperto')
            ->join('renders', 'finds.id', '=', 'renders.id_reperto')
            ->join('gigapixels', 'finds.id', '=', 'gigapixels.id_reperto')
            ->select(
                'finds.*', // Seleziona tutti i campi dalla tabella finds
                'biological_entities.*',
                'collections.*',
                'deposits.*',
                'catalogs.*',
                'compositions.*',
                'acquisitions.*',
                'renders.*',
                'gigapixels.*',
                'finds.descrizione as find_descrizione',// Rinomina il campo descrizione della tabella finds
                'collections.descrizione as collection_descrizione',
            )
            ->where('finds.id', '=', $id)
            ->first(); // Usa first() direttamente per ottenere il primo risultato

        return $find;
    }



}
