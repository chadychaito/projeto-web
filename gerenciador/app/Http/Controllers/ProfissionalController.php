<?php

namespace App\Http\Controllers;

use App\Time;

use App\Clube;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;

use Illuminate\Pagination\Paginator;

use Illuminate\Pagination\LengthAwarePaginator;;

class ProfissionalController extends Controller
{
    public function store(Request $request){
        $result = DB::insert("insert into profissional(nome_prof, especialidade, cargo) values(?, ?, ?)", [$request->input('nomeCompleto'), $request->input('especialidade'), $request->input('cargo')]);
        return back();
    }

    public function update(Request $request){
        $id = Input::get('id');
        
        
        if($request->input("nomeProfissional") != NULL){
            $update_nome = DB::table('profissional')->where('cod_prof', $id)->update(['nome_prof' => $request->input('nomeProfissional')]);
        }
        if($request->input('especialidadeProfissional') != NULL){
            $update_especialidade = DB::table('profissional')->where('cod_prof', $id)->update(['especialidade' => $request->input('especialidadeProfissional')]);
        }
        if($request->input('cargoProfissional') != NULL){
            $update_cargo = DB::table('profissional')->where('cod_prof', $id)->update(['cargo' => $request->input('cargoProfissional')]);
        }
        else{
            return back();
        }
    }
}
