@extends('layout.principal')
@section('conteudo')
<div class="row">
	<div class="col-md-12">
		<h1 class="title centered">Login</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 centered">
			<div class="col-md-5 col-lg-5 col-xl-5">
				<div class="bg-content">
					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" class="form-control form-login" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="seunome@gmail.com">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Senha</label>
							<input type="password" class="form-control form-login " id="exampleInputPassword1" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-green margin-top center">login</button>
					</form>
				</div> <!-- .bg-content -->
			</div> <!-- .col-md-3 -->
		</div><!-- .col-md-12 -->
	</div> <!-- .row -->	
</div>
@stop