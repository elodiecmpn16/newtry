<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Client;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ClientController extends Controller


{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index(){
        $clients = Client::all();
        return view('accueil',["clients"=> $clients]);
    }


    public function afficherStock()
    {
        $clients = DB::table('cltpass')
            ->select('nom')
            ->groupBy('nom')
            ->get();

        $stocks = DB::table('cltsto AS B')
            ->select('A.code', DB::raw('count(*) as total'))
            ->join('cltpass AS A', 'B.code', '=', 'A.code')
            ->groupBy('A.code')
            ->where('A.groupe', '=', 'logistique')
            ->get();
        return view('client/stocks', ['stocks' => $stocks, 'clients' => $clients]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $roles = Role::pluck('nom','id');
       return view('client.profil',['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Client $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
