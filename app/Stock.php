<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'cltsto';
    protected $fillable = ['code','ref','entree','datent','volume','nbpal','nbprd',];

}
