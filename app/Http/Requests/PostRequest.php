<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;


class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        if ($this->method() === "PUT" && ($this->post->user_id !== Auth::id())) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        switch ($this->method()) {
            case 'POST': {
                    $rules = [
                        'title' => ['required', 'unique:posts,title', 'max:255'],
                        'description' => ['required'],
                        'urlImage' => ['required'],
                    ];

                    return $rules;
                }
            case 'PUT':
            case 'PATH': {
                $rules = [
                    'title' => ['required', 'unique:posts,title,' . $this->post->id . ",id", 'max:255'],
                    'description' => ['required'],
                    'urlImage' => ['required'],
                ];
                return $rules;
                    break;
                }
            default:
                break;
        }
    }

    public function messages(){
        return [
            'title.required' => 'O Titulo é obrigadorio',
            'title.unique' => "Titulo já esta sendo ultilizado",
            "description.required" => 'A descrição é obrigadoria',
            "urlImage.required" => 'Url da imagem é obrigadorio'
        ];
    }
}
