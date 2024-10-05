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

class Paradata extends Model
{
    use HasFactory;


    protected $fillable = [
        'id_allegato',
        'stato_corrente',
        'responsabile_scelta_reperto',
        'scheda_validata',
        'validatore_scheda',
        'note',
        'responsabile_acquisizione',
        'operatore',
        'tipo_superfice',
        'descrizione_complessita',
        'fotocamera',
        'impostazioni',
        'obiettivo',
        'illuminazione',
        'light_box',
        'tipo_supporto',
        'numero_scatti',
        'software',
        'output',
        'strumentazione',
        'risoluzione',
        'modalita_scansione',
        'ingrandimento',
        'luminosita',
        'fibra_ottica',
        'tiling',
        'scala',
        'formato',
        'data_inizio',
        'data_fine',
        'tempo_totale',
        'luogo_acquisizione',
        'temperatura',
        'condizioni_iniziali_conservazione',
        'condizioni_finali_conservazione',
    ];

    public function attached(){
        return $this->belongsTo(attached::class, 'id_allegato');
    }

    public function modellizzazione(){
        return $this->hasMany(Modellizzazione::class, 'id_paradati');
    }

    public function metadatazione(){
        return $this->hasMany(Metadatazione::class, 'id_paradati');
    }

    public function archiviazione(){
        return $this->hasMany(Archiviazione::class, 'id_paradati');
    }

}
