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

class PrincipalController extends Controller
{

	public function index(Request $request){
		if(!Clube::get()->first()){
			return view('paginas.welcome');
		}
		else{
			$times = Time::paginate(3);
			$clube = Clube::get()->first();
			$products = DB::table(DB::raw("CONSULTA1  ('$request->search')"))->select('*')->paginate(4);
			return view('paginas.index', compact('times', 'clube', 'products'));
		}

	}

	public function desempenho(Request $request){
		$clube = Clube::get()->first();
		

		$value_range = $request->input('myRange');
		$times = DB::table(DB::raw("CONSULTA2  ($value_range[0], $value_range[1])"))->select('*')->paginate(4);
		
		return view('paginas.index_time', compact('clube', 'rank_time', 'times'));
	}

	public function buscarTime(Request $request){
		$clube = Clube::get()->first();
		$times = DB::table(DB::raw("CONSULTA1  ('$request->search')"))->select('*')->paginate(4);
		return view('paginas.index_profissional', compact('clube', 'times'));
	}

	public function login(){
		return view('paginas.login');
	}

	public function welcome(){
		return view('paginas.welcome');
	}


	public function cadastrarAtleta(){
		return view('paginas.forms.cadastrar_atleta');
	}

	public function cadastrarProfissional(){
		return view('paginas.forms.cadastrar_profissional');
	}

	public function cadastrarCampeonato(){
		return view('paginas.forms.cadastrar_campeonato');
	}

	public function cadastrarTime(){
		return view('paginas.forms.cadastrar_time');
	}

	public function verAtleta(){
		$id = Input::get('id');
		$atleta = DB::table('atleta')->where('cod_atleta', $id)->first();
		$time = DB::table('time')->where('cod_time', $atleta->cod_time)->first();

		return view('paginas.visualizar_atleta', compact('atleta', 'time'));
	}

	public function verProfissional(){
		$id = Input::get('id');
		$profissional = DB::table('profissional')->where('cod_prof', $id)->first();

		return view('paginas.visualizar_profissional', compact('profissional'));
	}

	public function register(){
		return view('paginas.register');
	}

}
