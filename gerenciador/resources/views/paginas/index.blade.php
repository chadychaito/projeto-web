@extends('layout.principal')
@section('conteudo')
<script src="https://demos.jquerymobile.com/1.4.2/js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.1/jquery.twbsPagination.js" type="text/javascript"></script>
<meta name="_token" content="{{ csrf_token() }}">
<script src="/js/multirange.js"></script>

<link rel="stylesheet" type="text/css" href="/css/multirange.css">
<header>
	<div class="row">
		<div class="col-md-6">
			<img class="img-thumbnail float-left" src="images/chady.png">
			<div class="img-thumbnail-info">
				<span class="name"> {{ Auth::user()->name }}</span>
				<span class="post">{{ Auth::user()->cargo }}</span>
			</div>
		</div><!-- . col -->
		<div class="col-md-2 offset-4">
		<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
			<button type="button" class="btn btn-red left"><i class="fas fa-sign-out-alt"></i>{{ __('Logout') }}</button>
		</a>

		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
		
		</div>
	</div><!-- .row -->
</header>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
			<h1 class="title"> SEU CLUBE</h1>
			<div class="bg-content">
				<div class="col-md-12 text-center">
					<img class="content-img" src="storage/clube/{{$clube->nome}}.png">
				</div><!-- . col -->
				<div class="sep"></div>
				<div class="col-md-12 text-center clube-name">
					{{$clube->nome}}	
				</div><!-- col -->	
			</div><!-- .bg-content -->
		</div><!-- .col -->
		<div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
			<h1 class="title">TIMES</h1>
			<div class="bg-content" id="buscar-content">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-5">
							<form action="{{ URL::to('/buscar_times') }}" method="POST">
									<div class="input-group">
										<div class="input-group-prepend">
											<button type="submit" class="btn btn-dark btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
										</div>
										<input type="text" class="form-control" name="search" id="inlineFormInputGroupTime" placeholder="Buscar Time">
									</div>
									<input type="hidden" name="_token" value="{{csrf_token()}}">		
								</form>
						</div> <!-- .col -->
						<div class="col-md-4 offset-3">
							<form action="{{ URL::to('/rank_desempenho') }}" method="POST">
								<input id="myRange" name="myRange[]" type="range" multiple value="0,100"/>
								<p>Desempenho: <span id="demo"></span></p>
								
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								
								<button type="submit" class="btn btn-success">Pesquisar</button>
							</form>
						</div> <!-- .col -->
						</div><!-- .row -->
				</div> <!-- .col -->
			</div><!-- .bg-content -->
			<div class="bg-content">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nome</th>
								<th scope="col">Esporte</th>
								<th scope="col">Categoria</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody id="tabela">
							<?php $count = 1; ?> 
							@foreach($times as $time)
							<tr>
								<th scope="row">{{$times ->perPage()*($times->currentPage()-1)+$count}}</th>
								<td>{{$time->nome}}</td>
								<td>{{$time->esporte}}</td>
								<td>{{$time->categoria}}</td>
								<td><a href="/visualizartime?id={{$time->cod_time}}" title="Ver Time"><i class="fas fa-eye"></i></a></td>
							</tr>
							<?php $count++; ?>
							@endforeach
							{{$times->links()}}
						</tbody>
					</table>
				</div><!-- . col -->
			</div><!-- .bg-content -->
		</div><!-- .col -->
	</div><!-- .row -->
</div><!-- .container -->

<script type="text/javascript" src="/js/rangeControl.js"></script>

<!--<script type="text/javascript">
 
	$('#search').on('keyup',function(){
 		$value=$(this).val();
		
		if($value.length > 4){
			$.ajax({
				type : 'get',
				
				url : '{{URL::to('search')}}',
				
				data:{'search':$value},
				
				success:function(data){
					$('#pagination-demo').twbsPagination({
        				totalPages: data['last_page'],
        				visiblePages: 6,
        				next: 'Next',
        				prev: 'Prev',
						onPageClick: function (event, page) {
							if($value.length > 4){
								$.ajax({
									type : 'get',
									
									url : '{{URL::to('search')}}?page=' + page,
									
									data:{'search':$value},
									
									success:function(data){ // construir a tabela 
										$('#page-content').text('Nome Time: ' + data['data'][0]['nome']);
										for (var i in data['data']){
											content  = "<tr><td></td>";
											content += '<td>' + data['data'][i]['nome'] + '</td>';
											content += '<td>' + data['data'][i]['esporte'] + '</td>';
											content += '<td>' + data['data'][i]['categoria'] + '</td>';
											content += "</tr>"
											$('#tabela').append(content);

										}
									}
								});
							}

						}
    				});

					//alert('attr ' + data['total'])

					//alert('Qtd linhas ' + data['data'].length)
					
				}
			});
		}
	 })

 </script>
  
 <script type="text/javascript">
  
	 $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
  
 </script>

<style>
	.wrapper{
	margin: 60px auto;
	text-align: center;
	}
	h1{
	margin-bottom: 1.25em;
	}
	#pagination-demo{
	display: inline-block;
	margin-bottom: 1.75em;
	}
	#pagination-demo li{
	display: inline-block;
	}

	.page-content{
	background: #eee;
	display: inline-block;
	padding: 10px;
	width: 100%;
	max-width: 660px;
	}
</style>-->

<script>
	var slider = document.getElementById("myRange");
	var output = document.getElementById("demo");
	output.innerHTML = slider.valueLow;

	slider.oninput = function() {
		output.innerHTML = this.valueLow + "-" + this.valueHigh;
	}
</script>
@stop