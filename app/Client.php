<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Client extends Model
{
    protected $table = 'cltpass';
    protected $fillable = ['Code','Mtpass','Codeclt','groupe','nom','ville','email',];

}
