@extends('layout.principal')
@section('conteudo')
<div class="row">
	<div class="col-md-12">
		<h1 class="title centered">Cadastrar Campeonato</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<form action="{{URL::to('/store_campeonato')}}" method="POST">
			<form>
				<div class="form-group">
					<label for="exampleInputEmail1">Nome do Campeonato</label>
					<input type="text" class="form-control form-control-lg" aria-describedby="nome" placeholder="Brasileirão" name='nomeCampeonato'>
				</div>
				<div class="form-group">
					<label for="selectTime">Time Relacionado</label>
					<select class="form-control" id="selectTime" name="time">
						@foreach ($times as $time)
							<option value="{{$time->cod_time}}">{{$time->nome}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Divisão</label>
					<input type="text" class="form-control form-control-lg" aria-describedby="Cargo" placeholder="Primeira Divisão" name='divisao'>
				</div>

				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button type="submit" class="btn btn-green margin-top center">Cadastrar</button>
			</form>
		</div><!-- .col-md-12 -->
	</div> <!-- .row -->
</div>
@stop