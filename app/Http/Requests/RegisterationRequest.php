<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterationRequest extends FormRequest
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
            "username" => ["required", "unique:users","alpha_num","min:8","max:25"],
            "email" => ["required", "email", "unique:users"],
            "name" => ["required", "string", "min:3"],
            "password" => ["required", "min:8"]
        ];
    }
}
