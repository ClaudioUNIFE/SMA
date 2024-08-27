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

class metadata extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_allegato',
        'codice_reperto',
        'titolo',
        'autore',
        'sogetto',
        'descrizione',
        'editore',
        'autore_di_contributo',
        'data',
        'tipo',
        'formato',
        'identificatore',
        'fonte',
        'lingua',
        'relazione',
        'copertura',
        'gestione_dei_diritti',
    ];



    public function attached(){
        return $this->belongsTo(attached::class, 'id_allegato');
    }
}
