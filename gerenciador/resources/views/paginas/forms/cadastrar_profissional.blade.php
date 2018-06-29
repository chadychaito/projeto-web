@extends('layout.principal')
@section('conteudo')
<div class="row">
	<div class="col-md-12">
		<h1 class="title centered">Cadastrar Profissional</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<form action="{{URL::to('/store_profissional')}}" method="POST">
				<div class="form-group">
					<label for="nomeCompleto">Nome Completo do Profissional</label>
					<input type="text" class="form-control form-control-lg" id="nomeCompleto" name="nomeCompleto" aria-describedby="nome" placeholder="João da Silva">
				</div>
				<div class="form-group">
					<label for="especialidade">Especialidade</label>
					<input type="text" class="form-control form-control-lg" id="especialidade" name="especialidade" aria-describedby="Especialidade" placeholder="Treinador">
				</div>
				<div class="form-group">
					<label for="cargo">Cargo</label>
					<input type="text" class="form-control form-control-lg" id="cargo" name="cargo" aria-describedby="Cargo" placeholder="Diretor de Futebol">
				</div>
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button type="submit" class="btn btn-green margin-top center">Cadastrar</button>
			</form>
		</div><!-- .col-md-12 -->
	</div> <!-- .row -->
</div>
@stop