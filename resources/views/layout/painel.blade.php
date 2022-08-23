@extends('layout.base')

@section('title', 'Painel')

@section('content')
<div class="container">
	<div class="row">
	          
	    <div class="col-sm col-md-3 col-lg-2 col-xl-2 text-center text-black rounded" style="background-color: #48c1f0">

	    	<ul class="nav flex-column">
	        <br>

	        <li class="nav-item">
	          <h5><a class="nav-link" href="/cliente"><i class="bi bi-list-ul"></i></i></i><br>Lista de Clientes</a></h5>
	        </li>

	        <hr>

	        <li class="nav-item">
	          <h5><a class="nav-link" href="/cliente/create"><i class="bi bi-save"></i></i><br>Cadastrar Cliente</a></h5>
	        </li>

	        <hr>

	        <li class="nav-item">
                <h5><a class="nav-link" href="/logout"><i class="bi bi-box-arrow-left"></i><br> Deslogar</a></h5>
            </li>

	    	</ul>

		</div>

		<div class="col-sm col-md-8 col-lg-10 col-xl-10 text-black" style="background-color: white">
			<div class="row">Bem vindo {{Auth::user()->name}}!</div>
			<div class="container">
				@yield('content2')
			</div>
		</div>

	</div>
</div>

@endsection