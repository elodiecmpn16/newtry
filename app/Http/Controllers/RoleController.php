<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Client;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RoleController extends Controller{

    public function index(){
        $role = Role::all()
            ->pluck('name');
        return view('client.profil',['roles'=>$role]);
    }
}
