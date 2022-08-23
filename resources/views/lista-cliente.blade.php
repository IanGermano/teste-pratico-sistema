@extends('layout.painel')

@section('content2')

	@if($clientes->isEmpty())
		<h1>Não possui clientes.</h1>
	@else
		<h1>Lista de Clientes:</h1>

		<hr>
	    @foreach($clientes as $cliente)
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
					<strong>Mostrar dados</strong><br>
					<a href="/cliente/{{$cliente['id']}}"><i class="bi bi-clipboard-data"></i></a>
				</div>

				<div class="col-sm col-md col-lg col-xl">
					<strong>Editar</strong><br>
					<a href="/cliente/{{$cliente['id']}}/edit"><i class="bi bi-pencil-square"></i></a>
				</div>
				
				<div class="col-sm col-md col-lg col-xl">
					<strong>Excluir</strong><br>
					<a href="/cliente/{{$cliente['id']}}/del"><i class="bi bi-eraser"></i></a>
				</div>
				
			</div>

			<hr>
		@endforeach
	@endif
@endsection