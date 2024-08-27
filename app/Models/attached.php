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

class Attached extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_reperto',
        'link',
        'tipo_acquisizione',
    ];

    public function find()
    {
        return $this->belongsTo(Find::class, 'id_reperto');
    }

    public function metadata()
    {
        return $this->hasOne(Metadata::class, 'id_allegato');
    }

    public function paradata()
    {
        return $this->hasOne(Paradata::class, 'id_allegato');
    }
}
