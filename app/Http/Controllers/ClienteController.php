<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Cliente;
use App\Http\Requests\ClientePostRequest;

class ClienteController extends Controller
{
    
    public function index(){
        $clientes = Cliente::where('id_usuario', Auth::user()->id)->get();
        return View::make("lista-cliente")->with('clientes', $clientes);
    }

    public function create(){
        return View::make("cadastrar-cliente");
    }

    public function store(ClientePostRequest $request){

        if(!$this->validarCPF($request->input('cpf'))){
            return redirect()->route('cliente.create')->with('message', 'cpf invalido');
        }

        if (Cliente::where('cpf', '=', $request->input('cpf'))->exists()) {
            return redirect()->route('cliente.create')->with('message', 'cpf ja cadastrado');
        }

        $cliente = new Cliente;
        
        $cliente->nome = $request->input('nome');
        $cliente->cpf = $request->input('cpf');
        $cliente->categoria = $request->input('categoria');
        $cliente->cep = $request->input('cep');
        $cliente->rua = $request->input('rua');
        $cliente->bairro = $request->input('bairro');
        $cliente->cidade = $request->input('cidade');
        $cliente->uf = $request->input('uf');
        $cliente->complemento = $request->input('complemento');
        $cliente->telefone = $request->input('telefone');
        $cliente->id_usuario = Auth::user()->id;

        $cliente->save();

        return redirect()->route('cliente.index');
        
    }

    public function show($id){
        $cliente = Cliente::find($id);
        return View::make("dados-cliente")->with('cliente', $cliente);
    }

    public function edit($id){
        $cliente = Cliente::find($id);
        return View::make("editar-cliente")->with('cliente', $cliente);
    }

    public function update(ClientePostRequest $request, $id){

        $cliente = Cliente::find($id);
        
        $cliente->nome = $request->input('nome');
        $cliente->cpf = $request->input('cpf');
        $cliente->categoria = $request->input('categoria');
        $cliente->cep = $request->input('cep');
        $cliente->rua = $request->input('rua');
        $cliente->bairro = $request->input('bairro');
        $cliente->cidade = $request->input('cidade');
        $cliente->uf = $request->input('uf');
        $cliente->complemento = $request->input('complemento');
        $cliente->telefone = $request->input('telefone');
        $cliente->id_usuario = Auth::user()->id;

        $cliente->save();

        return redirect()->route('cliente.index');
    }

    public function destroy($id){
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route('cliente.index');
    }

    public function validarCPF($cpf){

        // Extrai somente os números
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
         
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }

        return true;
    }
}
