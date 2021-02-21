<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterAuthRequest extends FormRequest
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
            'username' => ['required', 'string', 'min:3', 'max:255', 'alpha_dash', 'unique:users,username'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    /**
     * Body Parameters for API docs
     *
     * @return array
     */
    public function bodyParameters()
    {
        return [
            'username' => [
                'description' => "A username that doesn't already exist.",
            ],
            'email'    => [
                'description' => "An email that doesn't already exist.",
            ],
            'password' => [
                'description' => "Minimum of 8 characters.",
            ],
        ];
    }
}
