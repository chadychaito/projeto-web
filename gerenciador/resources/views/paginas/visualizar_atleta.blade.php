@extends('layout.principal')
@section('conteudo')
<div class="row">
	<div class="col-md-12">
		<h1 class="title centered">Informações {{$atleta->nome_atleta}}</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<form action="{{ URL::to('/update_atleta') }}?id={{$atleta->cod_atleta}}" method="POST">
				<div class="form-group">
					<label for="exampleInputEmail1">Nome Completo do Atleta</label>
					<input type="text" class="form-control form-control-lg" aria-describedby="nomeCompleto" name="nomeCompleto" placeholder="{{$atleta->nome_atleta}}">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Idade do Atleta</label>
					<input type="number" min="18" class="form-control form-control-lg" placeholder="{{$atleta->idade}}" name="idadeAtleta" aria-describedby="idade">
				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Time Relacionado</label>
					<select class="form-control" id="exampleFormControlSelect1" disabled>
						<option>{{$time->nome}}</option>
					</select>
				</div>
				<div class="form-group">
					<label for="formControlRange1">Desempenho</label>
					<input name="desempenho" type="range" class="custom-range" min="1" max="100" value="{{$atleta->desempenho}}" step="1" class="slider" id="atletaFormControlRange">
					<span id="range-atletaFormControlRange"></span>
				</div>
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<button type="submit" class="btn btn-green margin-top center">Salvar</button>
			</form>
		</div><!-- .col-md-12 -->
	</div> <!-- .row -->
</div>
<script type="text/javascript" src="/js/rangeControl.js"></script>	
@stop