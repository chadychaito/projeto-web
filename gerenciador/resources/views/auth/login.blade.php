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
				<div class="bg-content" id="login-content">
					<form method="POST" action="{{ route('login') }}">
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

						<!-- Senha -->
						<div class="form-group">
							<label for="password">Senha</label>
							<input  id="password" type="password" class="form-control{{$errors->has('password') ? 'is-invalid' : ''}} " name="password" placeholder="Password">
								
								@if($errors->has('password'))
									<span class="invalid-feedback">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Lembrar-me') }}
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<a class="link-login" href="{{ route('register') }}">{{ __('Cadastrar-se') }}</a>
							</div>
							<div class="col-md-6 text-right">
								<a class="link-login" href="{{ route('password.request') }}">
									<i>{{ __('Esqueceu a senha?') }}</i>
								</a>
							</div>
						</div>
						<button type="submit" class="btn btn-green margin-top center"> {{ __('Login') }}</button>
					</form>
				</div> <!-- .bg-content -->
			</div> <!-- .col-md-3 -->
		</div><!-- .col-md-12 -->
	</div> <!-- .row -->	
</div>
@stop