<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
	public function index(){
		return view('paginas.index');
	}

	public function login(){
		return view('paginas.login');
	}

	public function welcome(){
		return view('paginas.welcome');
	}

	public function criarclube(){
		return view('paginas.criar_clube');
	}

	public function vertime(){
		return view('paginas.visualizar_time');
	}
}
