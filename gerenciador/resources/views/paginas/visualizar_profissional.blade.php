@extends('layout.principal')
@section('conteudo')
<div class="row">
	<div class="col-md-12">
		<h1 class="title centered">Visualizar {{$profissional->nome_prof}}</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<form action="{{ URL::to('/update_profissional') }}?id={{$profissional->cod_prof}}" method="POST">
				<div class="form-group">
					<label for="exampleInputEmail1">Nome Completo do Profissional</label>
					<input type="text" class="form-control form-control-lg" aria-describedby="nome" name="nomeProfissional" placeholder="{{$profissional->nome_prof}}">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Especialidade</label>
					<input type="text" class="form-control form-control-lg" aria-describedby="Especialidade" name="especialidadeProfissional" placeholder="{{$profissional->especialidade}}">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Cargo</label>
					<input type="text" class="form-control form-control-lg" aria-describedby="Cargo" name="cargoProfissional" placeholder="{{$profissional->cargo}}">
				</div>
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<button type="submit" class="btn btn-green margin-top center">Salvar</button>
			</form>
		</div><!-- .col-md-12 -->
	</div> <!-- .row -->
</div>
@stop