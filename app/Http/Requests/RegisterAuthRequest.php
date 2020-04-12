<?php

namespace App\Http\Requests;

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
                'username' => [
                               'required',
                               'string',
                               'max:255',
                               'unique:users',
                              ],                'email' => [
                                                            'required',
                                                            'string',
                                                            'email',
                                                            'max:255',
                                                            'unique:users',
                                                           ],                'password' => [
                                                                                            'required',
                                                                                            'string',
                                                                                            'min:8',
                                                                                            'confirmed',
                                                                                           ]
               ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [];
    }
}
