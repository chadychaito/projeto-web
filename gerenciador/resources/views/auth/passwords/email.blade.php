@extends('layout.principal')
@section('conteudo')
<div class="row">
	<div class="col-md-12">
		<h1 class="title centered">Recuperar Senha</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 centered">
			<div class="col-md-5 col-lg-5 col-xl-5">
				<div class="bg-content" id="login-content">
						@if (session('status'))
							<div class="alert alert-success">
								{{ session('status') }}
							</div>
						@endif

					<form method="POST" action="{{ route('password.email') }}">
						@csrf
						
						<!-- Email -->
						<div class="form-group">
							<label for="email">{{ __('E-Mail') }}</label>
							<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
							
							@if ($errors->has('email'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif
						</div>
						<div class="alert  alert-warning alert-dismissible fade show" role="alert">
							<span class="badge badge-pill badge-warning">Aviso</span> Você receberá um link de recuperação de senha em seu email. Isto pode levar alguns minutos.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<button type="submit" class="btn btn-green margin-top center"> {{ __('Enviar email') }}</button>
					</form>
				</div> <!-- .bg-content -->
			</div> <!-- .col-md-3 -->
		</div><!-- .col-md-12 -->
	</div> <!-- .row -->	
</div>
@stop