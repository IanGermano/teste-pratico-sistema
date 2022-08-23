@extends('layout.painel')

@section('content2')
<h1>Dados do Cliente:</h1>

<hr>

<div class="row">

	<div class="col-sm col-md col-lg col-xl">
		<strong>Nome:</strong><br>
		{{$cliente['nome']}}
	</div>

	<div class="col-sm col-md col-lg col-xl">
		<strong>Cpf:</strong><br>
		{{$cliente['cpf']}}
	</div>

	<div class="col-sm col-md col-lg col-xl">
		<strong>Categoria:</strong><br>
		{{$cliente['categoria']}}
	</div>

	<div class="col-sm col-md col-lg col-xl">
		<strong>CEP:</strong><br>
		{{$cliente['cep']}}
	</div>
	
</div>
<br>
<div class="row">

	<div class="col-sm col-md col-lg col-xl">
		<strong>Rua:</strong><br>
		{{$cliente['rua']}}
	</div>

	<div class="col-sm col-md col-lg col-xl">
		<strong>Bairro:</strong><br>
		{{$cliente['bairro']}}
	</div>

	<div class="col-sm col-md col-lg col-xl">
		<strong>Cidade:</strong><br>
		{{$cliente['cidade']}}
	</div>

	<div class="col-sm col-md col-lg col-xl">
		<strong>UF:</strong><br>
		{{$cliente['uf']}}
	</div>
	
</div>
<br>
<div class="row">

	<div class="col-sm col-md col-lg col-xl">
		<strong>Complemento:</strong><br>
		{{$cliente['complemento']}}
	</div>

	<div class="col-sm col-md col-lg col-xl">
		<strong>Telefone:</strong><br>
		{{$cliente['telefone']}}
	</div>
	
</div>

<hr>
		
@endsection