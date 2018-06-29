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

class TimeController extends Controller
{   
    public function index(Request $request){
        $id = Input::get('id');
		
		/* Pegar o nome do Time */
		$time = DB::table('time')->where('cod_time', '=', $id)->first();
		
		/* Retornar Campo de Atletas */
		$atletas = DB::table('atleta')->where('cod_time', '=', $id)->paginate(3, ['*'], 'atletas');

		/* Retornar Campo de Campeonatos */
		$campeonatos = DB::table('campeonato')->where('cod_time', '=', $id)->paginate(3, ['*'], 'campeonatos');
		
		/* Retornar Comissão */	
        $profissionais = DB::table(DB::raw("CONSULTA1  ('Time1')"))->select('*')->paginate(3,  ['*'], 'profissionais' );
        
		
		/* RETORNANDO PRA VIEW */
		return view('paginas.visualizar_time', compact('atletas', 'campeonatos', 'profissionais', 'time'));
    }

    public function store(Request $request){
        
        $result = DB::insert("insert into time(nome, esporte, categoria) values(?, ?, ?)", [$request->input('nomeTime'), $request->input('esporteTime'), $request->input('categoriaTime')]);
        return back();
    }
    
    public function search(Request $request){
        if($request->ajax())
        {  

            $products = DB::table(DB::raw("CONSULTA1  ('$request->search')"))->select('*')->paginate(4);
            return View::make('paginas.times')->with('products', $products)->render();
        }
    }
    
}
