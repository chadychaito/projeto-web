@extends('layout.principal')
@section('conteudo')

<link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
<script src="http://demo.expertphp.in/js/jquery.js"></script>
<script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>

<div class="row">
	<div class="col-md-12">
		<h1 class="title centered">Cadastrar Atleta</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<form action="{{URL::to('/store_atleta')}}" method="POST">
				<div class="form-group">
					<label for="nomeAtleta">Nome Completo do Atleta</label>
					<input type="text" class="form-control form-control-lg" id="nomeAtleta" name="nomeAtleta" aria-describedby="nomeCompleto" placeholder="João da Silva">
				</div>
				<div class="form-group">
					<label for="dataNascimento">Data de Nascimento</label>
					<input type="number" class="form-control form-control-lg" id="dataNascimento" name="dataNascimento" aria-describedby="dataNascimento">
				</div>
				<div class="form-group">
					<label for="timeRelacionado">Time Relacionado</label>
					<input type="text" class="form-control" id="search" name="search">
				</div>
				<div class="form-group">
					<label for="atletaFormControlRange">Desempenho</label>
					<input type="range" class="custom-range" min="1" max="5" value="1" step="0.5" class="slider" id="atletaFormControlRange" name="desempenhoAtleta">
					<span id="range-atletaFormControlRange"></span>
				</div>

				<input type="hidden" name="_token" value="{{csrf_token()}}">
				
				<button type="submit" class="btn btn-green margin-top center">Cadastrar</button>
			</form>
		</div><!-- .col-md-12 -->
	</div> <!-- .row -->
</div>
<script type="text/javascript" src="/js/rangeControl.js"></script>

<script type="text/javascript">
    var path = "{{ url('search') }}";
    $('#search').typeahead({
        minLength: 2,
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>
@stop