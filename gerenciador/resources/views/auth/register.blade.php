@extends('layout.principal')
@section('conteudo')
<div class="row">
	<div class="col-md-12">
		<h1 class="title centered">Cadastrar</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 centered">
			<div class="col-md-5 col-lg-5 col-xl-5">
				<div class="bg-content" id="login-content">
					<form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Nome -->
                        <div class="form-group">
							<label for="name">{{ __('Nome') }}</label>
							<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" name="name" aria-describedby="nameRegister" placeholder="Seu Nome" required autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
						 <!-- Email -->
						<div class="form-group">
							<label for="email">{{ __('Cargo') }}</label>
							<input id="email" type="text" class="form-control{{ $errors->has('cargo') ? ' is-invalid' : '' }}" value="{{ old('cargo') }}" name="cargo" aria-describedby="cargo" placeholder="Presidente" required>
                            @if ($errors->has('cargo'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <!-- Email -->
						<div class="form-group">
							<label for="email">{{ __('E-Mail') }}</label>
							<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" name="email" aria-describedby="emailHelp" placeholder="seuemail@gmail.com" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <!-- Senha -->
						<div class="form-group">
							<label for="password">{{ __('Senha') }}</label>
							<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : ''}}" name="password" placeholder="Senha" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        
                        </div>
                        <!-- Confirmar Senha -->
						<div class="form-group">
							<label for="password-confirm">{{ __('Confirmar Senha') }}</label>
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Senha" required>
						</div>

						<a class="link-login centered" href="{{ route('login') }}"> Já sou cadastrado</a>					
						
						<button type="submit" class="btn btn-green margin-top center"> {{ __('Cadastrar') }}</button>
					</form>
				</div> <!-- .bg-content -->
			</div> <!-- .col-md-3 -->
		</div><!-- .col-md-12 -->
	</div> <!-- .row -->	
</div>
@stop