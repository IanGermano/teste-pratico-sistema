<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\SendMailUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class LoginController extends Controller
{
	public function login(){
		return View::make("login");
	}

	public function cadastro(){
		return View::make("cadastrar-usuario");
	}

	public function cadastrar(Request $request){

    	$user = new User;

    	$user->name = $request->input('name');
    	$user->email = $request->input('email');
    	$user->password = Hash::make($request->input('password'));

    	$user->save();

        //Mail::to($user->email)->send(new SendMailUser());

    	return redirect()->route('pagina.login')
                            ->with('message', 'usuario cadastrado com sucesso!');
    }

    public function logar(Request $request){
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('cliente.index');
        }
        
        return redirect()->route('pagina.login')
                            ->with('message', 'e-mail ou senha incorretos.');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('pagina.login');
    }

    public function teste(){
        Mail::to('ian_germano@hotmail.com')->send(new SendMailUser());

        if (Mail::failures()) {
           return response()->Fail('e-mail falhou');
        }else{
           return response()->success('e-mail enviado');
        }

    }
}
