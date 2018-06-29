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

class ClubeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('paginas.forms.criar_clube');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Nome do Clube que será o nome padrão para a Imagem
		$nomeClube = $request->nomeClube;
		
		$result = DB::insert("insert into clube(nome, datacriacao, cidadesede) values(?, ?, ?)", [$request->input('nomeClube'), $request->input('dataCriacaoClube'), $request->input('cidadeSedeClube')]);
 
		// Verifica se informou o arquivo e se é válido
		if ($request->hasFile('image') && $request->file('image')->isValid()) {
			 
			// Recupera a extensão do arquivo
			$extension = $request->image->extension();
	 
			// Define finalmente o nome
			$nameFile = "{$nomeClube}.{$extension}";
	 
			// Faz o upload:
			$upload = $request->image->storeAs('clube', $nameFile);
			// Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
	 
			// Verifica se NÃO deu certo o upload (Redireciona de volta)
			if ( !$upload )
				return redirect()
							->back()
							->with('error', 'Falha ao fazer upload')
							->withInput();
	 
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
