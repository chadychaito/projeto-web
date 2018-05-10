@extends('layout.principal')
@section('conteudo')

<header>
	<div class="row">
		<div class="col-md-6">
			<img class="img-thumbnail float-left" src="images/chady.jpg">
			<div class="img-thumbnail-info">
				<span class="name">Chady Chaito</span>
				<span class="post">Presidente</span>
			</div>
		</div><!-- . col -->
		<div class="col-md-2 offset-4">
			<button type="button" class="btn btn-red left"><i class="fas fa-sign-out-alt"></i>Logout</button>
		</div>
	</div><!-- .row -->
</header>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
			<h1 class="title"> SEU CLUBE</h1>
			<div class="bg-content">
				<div class="col-md-12">
					<img class="content-img" src="images/santos.png">
				</div><!-- . col -->
				<div class="sep"></div>
				<div class="col-md-12">
					SANTOS CLUBE	
				</div><!-- col -->	
			</div><!-- .bg-content -->
		</div><!-- .col -->
		<div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
			<h1 class="title">TIMES</h1>
			<div class="bg-content" id="buscar-content">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-5">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="fas fa-search"></i></div>
								</div>
								<input type="text" class="form-control" id="inlineFormInputGroupTime" placeholder="Buscar Time">
							</div>
						</div> <!-- .col -->
						<div class="col-md-4 offset-3">
							<form>
								<div class="form-group">
									<input type="range" class="custom-range" min="1" max="30" value="15" class="slider" id="formControlRange">
									<span id="range-days"></span>
								</div>
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
								<th scope="col">Categoria</th>
								<th scope="col">Jogadores</th>
								<th scope="col">Comissão</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td><i class="fas fa-eye"></i></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td><i class="fas fa-eye"></i></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td><i class="fas fa-eye"></i></td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>Chadonha</td>
								<td>Maconha</td>
								<td>@twitter</td>
								<td><i class="fas fa-eye"></i></td>
							</tr>
						</tbody>
					</table>
				</div><!-- . col -->
			</div><!-- .bg-content -->
		</div><!-- .col -->
	</div><!-- .row -->
</div><!-- .container -->

<script type="text/javascript">
	var slider = document.getElementById("formControlRange");
	var output = document.getElementById("range-days");
	
	//Apresentar o valor Default
	output.innerHTML = slider.value + " dias atrás";

	//Apresentar o valor depois da alteração
	slider.oninput = function() {
		if(this.value == 1)
			output.innerHTML = this.value + " dia atrás";
		else
			output.innerHTML = this.value + " dias atrás";
	}
</script>
@stop