@extends('layout.painel')

@section('content2')

	@if(Session::has('errors'))
		@foreach ($errors->all() as $error)
		    <div class="alert alert-danger">{{ $error }}</div>
		@endforeach
	@endif

	@if(Session::has('message'))
		<br>
		<div class="alert alert-danger">{{ Session::get('message') }}</div>
	@endif
	
	<form method="POST" action="/cliente/{{$cliente['id']}}/update">
		@csrf
		<br>
		<h1 class="fw-bold mb-2">Editar cliente:</h1>

		<hr>

		<div class="form-outline form-white mb-4">
			<label class="form-label" for="nome">Nome</label>
			<input name="nome" type="text" id="nome" class="form-control form-control-lg" value="{{$cliente['nome']}}" />
		</div>

		<div class="form-outline form-white mb-4">
			<label class="form-label" for="cpf">Cpf</label>
			<input name="cpf" type="text" id="cpf" class="form-control form-control-lg" value="{{$cliente['cpf']}}"/>
		</div>

		<div class="form-outline form-white mb-4">
			<label class="form-label" for="categoria">Categoria</label>
			<input name="categoria" type="text" id="categoria" class="form-control form-control-lg" value="{{$cliente['categoria']}}"/>
		</div>

		<div class="form-outline form-white mb-4">
			<label class="form-label" for="cep">CEP</label>
			<input name="cep" type="text" id="cep" class="form-control form-control-lg" value="{{$cliente['cep']}}"/>
		</div>

		<div class="form-outline form-white mb-4">
			<label class="form-label" for="rua">Rua</label>
			<input name="rua" type="text" id="rua" class="form-control form-control-lg" value="{{$cliente['rua']}}"/>
		</div>

		<div class="form-outline form-white mb-4">
			<label class="form-label" for="bairro">Bairro</label>
			<input name="bairro" type="text" id="bairro" class="form-control form-control-lg" value="{{$cliente['bairro']}}"/>
		</div>

		<div class="form-outline form-white mb-4">
			<label class="form-label" for="cidade">Cidade</label>
			<input name="cidade" type="text" id="cidade" class="form-control form-control-lg" value="{{$cliente['cidade']}}"/>
		</div>

		<div class="form-outline form-white mb-4">
			<label class="form-label" for="uf">UF</label>
			<input name="uf" type="text" id="uf" class="form-control form-control-lg" value="{{$cliente['uf']}}" />
		</div>

		<div class="form-outline form-white mb-4">
			<label class="form-label" for="complemento">Complemento</label>
			<input name="complemento" type="text" id="complemento" class="form-control form-control-lg" value="{{$cliente['complemento']}}"/>
		</div>

		<div class="form-outline form-white mb-4">
			<label class="form-label" for="telefone">Telefone</label>
			<input name="telefone" type="text" id="telefone" class="form-control form-control-lg"value="{{$cliente['telefone']}}"/>
		</div>

		<button class="btn btn-outline-light btn-lg px-5 mb-4" style="background-color: #48c1f0" type="submit">Editar</button>
	</form>

@endsection

@section('js')

<script type="text/javascript">

	jQuery(document).ready(function(){

		$('#cpf').mask('000.000.000-00');
		$('#cep').mask('00000-000');
		$('#telefone').mask('(00) 0 0000-0000');

		$("#cep").change(function(){

			var cep = $("#cep").val();
			var url = "https://viacep.com.br/ws/" + cep + "/json/";

			$.ajaxSetup({
			  	headers: {
			    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			  	}
			});

	    	jQuery.ajax({
	        	url: url,
	        	method: 'get',
        		success: function(response){
        			$('#rua').val(response.logradouro);
        			$('#bairro').val(response.bairro);
        			$('#cidade').val(response.localidade);
        			$('#uf').val(response.uf);
        		}
        	});

		});

    });
  
</script>


@endsection