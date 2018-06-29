@extends('layout.principal')
@section('conteudo')
<div class="row">
	<div class="col-md-12">
		<h1 class="title centered">{{$time->nome}}</h1>
		<p class="sub-title centered" id="esporte">{{$profissionais[0]->esporte}} ({{$profissionais[0]->categoria}})</p>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-md-6 col-lg-6">
			<h2 class="title sub-title"></i><img src="/images/icons/atletas.png" style="width: 10%;"> Atletas</h1>
			<div class="bg-content">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nome</th>
							<th scope="col">Time</th>
							<th scope="col">Desempenho</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						<?php $count = 1; ?> 
						@foreach ($atletas as $atleta)
						<tr>
							<th scope="row">{{$atletas ->perPage()*($atletas->currentPage()-1)+$count}}</th>
							<td>{{$atleta->nome_atleta}}</td>
							<td>{{$atleta->cod_time}}</td>
							<td>{{$atleta->desempenho}}</td>
							<td><a href="/visualizaratleta?id={{$atleta->cod_atleta}}" title="Ver Time"><i class="fas fa-eye"></i></a></td>
						</tr>
						<?php $count++; ?>
						@endforeach
						{{ $atletas->appends(['id'=>$atleta->cod_time])->links() }}
					</tbody>
				</table>
			</div>
		</div><!-- .col-md-12 -->
		<div class="col-sm-6 col-md-6 col-lg-6">
			<h2 class="title sub-title"><img src="/images/icons/comissao.png" style="width: 10%;"> Comissão</h1>
			<div class="bg-content">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nome</th>
							<th scope="col">Cargo</th>
							<th scope="col">Especialidade</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						<?php $count = 1; ?> 
						@foreach ($profissionais as $profissional)
						<tr>
							<th scope="row">{{$profissionais ->perPage()*($profissionais->currentPage()-1)+$count}}</th>
							<td>{{$profissional->nome_prof}}</td>
							<td>{{$profissional->cargo}}</td>
							<td>{{$profissional->esporte}}</td>
							<td><a href="/visualizarprofissional?id={{$profissional->cod_prof}}" title="Ver Time"><i class="fas fa-eye"></i></a></td>
						</tr>
						<?php $count++; ?>
						@endforeach
						{{ $profissionais->appends(['id'=>$atleta->cod_time])->links() }}
					</tbody>
				</table>	
			</div> <!-- .bg-content -->
		</div><!-- .col-md-12 -->
	</div> <!-- .row -->
	<div class="row">
		<div class="col-md-6 offset-3">
			<h2 class="title sub-title"><img src="/images/icons/campeonatos.png" style="width: 10%;"> Campeonatos</h1>
			<div class="bg-content">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nome</th>
							<th scope="col">Divisão</th>
						</tr>
					</thead>
					<tbody>
					<?php $count = 1; ?>
						@foreach ($campeonatos as $campeonato)
						<tr>
							<th scope="row">{{$campeonatos ->perPage()*($campeonatos->currentPage()-1)+$count}}</th>
							<td>{{$campeonato->nome_camp}}</td>
							<td>{{$campeonato->divisao}}</td>
						</tr>
						<?php $count++; ?>
						@endforeach
					</tbody>
				</table>	
			</div> <!-- .bg-content -->
		</div>
	</div><!-- .row -->	
</div>	
@stop