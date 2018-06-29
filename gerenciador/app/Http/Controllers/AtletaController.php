<?php

namespace App\Http\Controllers;

use App\Time;

use App\Clube;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;

use Illuminate\Pagination\Paginator;

use Illuminate\Pagination\LengthAwarePaginator;

class AtletaController extends Controller
{
    public function cadastrarAtleta()
    {
        $times = Time::get();

        return view('paginas.forms.cadastrar_atleta', compact('times'));
    }

    public function store(Request $request){
        $result = DB::insert("insert into atleta(nome_atleta, idade, desempenho, cod_time) values(?, ?, ?, ?)", [$request->input('nomeAtleta'), $request->input('dataNascimento'), $request->input('desempenhoAtleta'), $request->input('timeRelacionado')]);
        return back();
    }

    public function update(Request $request){
        $id = Input::get('id');

        if($request->input("nomeCompleto") != NULL){
            $update_nome = DB::table('atleta')->where('cod_atleta', $id)->update(['nome_atleta' => $request->input('nomeCompleto')]);
        }
        if($request->input("idade") != NULL){
            $update_idade = DB::table('atleta')->where('cod_atleta', $id)->update(['idade' => $request->input('idadeAtleta')]);
        }
        if($request->input("desempenho") != NULL){
            $update_desempenho = DB::table('atleta')->where('cod_atleta', $id)->update(['desempenho' => $request->input('desempenho')]);
        }
        return back();
    }

}
