<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Json extends Model
{
    protected $fillable = ['code', 'ref', 'lot', 'entree', 'um', 'datent', 'volume', 'libelle', 'nbpal', 'nbprd', 'paldde', 'prddde', 'ref2', 'bent', 'bsor', 'famille', 'fournisseur', 'refclt', 'contremarque'];
}
