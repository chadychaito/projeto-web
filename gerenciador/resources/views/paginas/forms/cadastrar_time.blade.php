@extends('layout.principal')
@section('conteudo')
<div class="row">
	<div class="col-md-12">
		<h1 class="title centered">Cadastrar Time</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<form action="{{URL::to('/store_time')}}" method="POST">
				<div class="form-group">
					<label for="nomeTime">Nome do Time</label>
					<input type="text" class="form-control form-control-lg" id="nomeTime" name="nomeTime" aria-describedby="nomeTime" placeholder="Time A">
				</div>
				<div class="form-group">
					<label for="esporteTime">Esporte</label>
					<input type="text" class="form-control form-control-lg" id="esporteTime" name="esporteTime" aria-describedby="esporte" placeholder="Futebol">
				</div>
				<div class="form-group">
					<label for="categoriaTime">Categoria</label>
					<input type="text" class="form-control form-control-lg" id="categoriaTime" name="categoriaTime" aria-describedby="categoria" placeholder="Sub-20">
				</div>
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<button type="submit" class="btn btn-green margin-top center">Cadastrar</button>
			</form>
		</div><!-- .col-md-12 -->
	</div> <!-- .row -->
</div>
@stop