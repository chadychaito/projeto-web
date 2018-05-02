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
			<form>
				<div class="form-group">
					<label for="exampleInputEmail1">Nome do Clube Esportivo</label>
					<input type="email" class="form-control form-control-lg" aria-describedby="emailHelp" placeholder="seunome@gmail.com">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Data de Criação do Clube Esportivo</label>
					<input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="seunome@gmail.com">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Cidade Sede do Clube Esportivo</label>
					<input type="password" class="form-control form-control-lg " id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="exampleFormControlFile1">Escudo/Brasão do Clube Esportivo</label>
					<input type="file" class="form-control-file" id="exampleFormControlFile1">
				</div>
				<button type="submit" class="btn btn-green margin-top center">Criar</button>
			</form>
		</div><!-- .col-md-12 -->
	</div> <!-- .row -->
</div>	
@stop