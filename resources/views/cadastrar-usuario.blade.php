@extends('layout.base')

@section('title', 'Página Login')

@section('content')

	<form method="POST" action="/cadastrar">
		@csrf
		<br>
		<h2 class="fw-bold mb-2">Teste e-Get</h2>
		<h4 class="text-white mb-2">Já possui conta? - <a href="/">Fazer Login</a></h4>
		<h1 class="fw-bold mb-2">Cadastrar:</h1>

		<div class="form-outline form-white mb-4">
			<label class="form-label" for="name">Nome</label>
			<input name="name" type="text" id="name" class="form-control form-control-lg"/>
		</div>

		<div class="form-outline form-white mb-4">
			<label class="form-label" for="email">E-mail</label>
			<input name="email" type="email" id="email" class="form-control form-control-lg"/>
		</div>

		<div class="form-outline form-white mb-4">
			<label class="form-label" for="password">Senha</label>
			<input name="password" type="password" id="password" class="form-control form-control-lg"/>
		</div>

		<button class="btn btn-outline-light btn-lg px-5 mb-4" type="submit">Cadastrar</button>
	</form>

@endsection