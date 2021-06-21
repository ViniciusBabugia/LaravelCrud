<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientsFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Não trabalhamos com autenticação então ele sempre fica autorizado
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:100',
            'birth_date' => 'required',
            'sex' => 'required'
        ];
    }
    
    public function messages() {
         return [
            'name' => 'O campo Nome é obrigatório!',
            'birth_date' => 'O campo Data de nascimento é obrigatório!',
            'sex' => 'Por gentileza, selecione o Gênero!'
        ];
    }
}
