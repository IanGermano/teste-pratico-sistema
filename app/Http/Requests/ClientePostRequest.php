<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(){
        return [
            'nome' => 'required',
            'cpf' => 'required',
            'categoria' => 'nullable',
            'cep' => 'required',
            'rua' => 'nullable',
            'bairro' => 'nullable',
            'cidade' => 'nullable',
            'uf' => 'nullable',
            'complemento' => 'nullable',
            'telefone' => 'nullable',
        ];
    }

    public function messages(){

        return [
            'required' => 'O campo :attribute é requerido.',
        ]; 

    }
}
