<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class AuthRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "name" => ["required", "string"],
            "email" => ["required", "email:rfc,dns","unique:users,email"],
            "password" => ["required","confirmed"],
        ];
    }

    public function messages(){
        return [
            "name.required" => "Nome é obrigatório",
            "email.required" => "E-mail é obrigatório",
            "password.required" => "A senha é obrigatório",
            "password.confirmed" => "Senhas passadas são diferentes"
        ];
    }
}


// , Password::min(8)->letters()
//                     ->mixedCase()
//                     ->numbers()
//                     ->symbols()