<?php

namespace App\Http\Controllers;


use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class FormController extends Controller
{

//    public function index(){
//
//        return view('/test');
//    }
    public function index()
    {
        $recherche= Input::get('recherche');
        $query = DB::table('cltsto')
            ->where('Ref', 'LIKE', '%' . $recherche . '%')
            ->get();

        return view('test',['query'=>$query,'recherche'=>$recherche]);
    }

    public function store()
    {
        DB::table('cltsto')
        ->get()->pluck('Ref');
        return redirect('test')->with('success', 'okeyyyyy');
    }
    public function result(Request  $request)
    {
        $search = $request->input('search');
        $results = $request->input('results');

        return view('test',compact('search','results'));
    }

}
