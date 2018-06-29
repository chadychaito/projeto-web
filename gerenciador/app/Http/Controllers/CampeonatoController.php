<?php

namespace App\Http\Controllers;

use App\Time;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\URL;

use Illuminate\Support\Facades\DB;

class CampeonatoController extends Controller
{   

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $times = Time::get();

        return view('paginas.forms.cadastrar_campeonato', compact('times'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $result = DB::insert("insert into campeonato(nome_camp, divisao, cod_time) values(?, ?, ?)", [$request->input('nomeCampeonato'), $request->input('divisao'), $request->input('time')]);
        return back();
    }

}
