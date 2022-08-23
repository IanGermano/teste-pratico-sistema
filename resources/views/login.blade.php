@extends('layout.base')

@section('title', 'Página Login')

@section('content')

	@if(Session::has('message'))
		<br>
		<div class="alert alert-warning">{{ Session::get('message') }}</div>
	@endif

	<form method="POST" action="/logar">
		@csrf
		<br>
		<h2 class="fw-bold mb-2">Teste e-Get</h2>
		<h4 class="text-white mb-2">Não possui conta? - <a href="/cadastro">Criar Conta</a></h4>
		<h1 class="fw-bold mb-2">Login:</h1>

		<div class="form-outline form-white mb-4">
			<label class="form-label" for="email">E-mail</label>
			<input name="email" type="email" id="email" class="form-control form-control-lg"/>
		</div>

		<div class="form-outline form-white mb-4">
			<label class="form-label" for="password">Senha</label>
			<input name="password" type="password" id="password" class="form-control form-control-lg"/>
		</div>

		<button class="btn btn-outline-light btn-lg px-5 mb-4" type="submit">Logar</button>
	</form>

@endsection