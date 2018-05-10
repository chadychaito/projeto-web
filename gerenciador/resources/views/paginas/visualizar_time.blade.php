@extends('layout.principal')
@section('conteudo')
<div class="row">
	<div class="col-md-12">
		<h1 class="title centered">NOME DO TIME</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-md-6 col-lg-6">
			<h2 class="title sub-title"><i class="fas fa-user"></i> Atletas</h1>
			<div class="bg-content">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">First</th>
							<th scope="col">Last</th>
							<th scope="col">Handle</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div><!-- .col-md-12 -->
		<div class="col-sm-6 col-md-6 col-lg-6">
			<h2 class="title sub-title"><i class="fas fa-users"></i> Comissão</h1>
			<div class="bg-content">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">First</th>
							<th scope="col">Last</th>
							<th scope="col">Handle</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody>
				</table>	
			</div> <!-- .bg-content -->
		</div><!-- .col-md-12 -->
	</div> <!-- .row -->
	<div class="row">
		<div class="col-md-6 offset-3">
			<h2 class="title sub-title"><i class="fas fa-trophy"></i> Campeonatos</h1>
			<div class="bg-content">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">First</th>
							<th scope="col">Last</th>
							<th scope="col">Handle</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody>
				</table>	
			</div> <!-- .bg-content -->
		</div>
	</div><!-- .row -->	
</div>	
@stop