@extends('layout.principal')
@section('conteudo')
<div class="row">
	<div class="col-md-12">
		<h1 class="title centered">Crie seu clube esportivo</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<form action="{{URL::to('/store_clube')}}" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nomeClube">Nome do Clube Esportivo</label>
					<input type="text" class="form-control form-control-lg" name ="nomeClube" id="nomeClube" aria-describedby="emailHelp" placeholder="Clube Esportivo UFScar">
				</div>
				<div class="form-group">
					<label for="dataCriacaoClube">Data de Criação do Clube Esportivo</label>
					<input type="text" class="form-control form-control-lg" name="dataCriacaoClube" id="dataCriacaoClube" aria-describedby="emailHelp" placeholder="12/10/1998">
				</div>
				<div class="form-group">
					<label for="cidadeSedeClube">Cidade Sede do Clube Esportivo</label>
					<input type="text" class="form-control form-control-lg " name="cidadeSedeClube" id="cidadeSedeClube" placeholder="Sorocaba, SP">
				</div>
				<div class="form-group">
					<label for="image">Escudo/Brasão do Clube Esportivo</label>
					<input type="file" class="form-control-file" name="image" id="image">
				</div>
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<button type="submit" class="btn btn-green margin-top center">Criar</button>
			</form>
		</div><!-- .col-md-12 -->
	</div> <!-- .row -->
</div>	
@stop