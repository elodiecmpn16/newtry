<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='roles';

    protected $fillable = ['name','description','role','role_id','role_user'];
    public function users()
    {
        return $this->belongsToMany('App\User')
            ->using('App\UserRole')
            ->withPivot([
                'created_by',
                'updated_by'
            ]);    }

}
