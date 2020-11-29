<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class Register extends FormRequest
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
            'username'             => 'required|string|max:255',
            'email'                => 'required|string|email|max:255|unique:App\Models\User,email',
            'password'             => 'required',
            'jenis_kelamin'        => 'required',
            'tanggal_lahir'        => 'required|date_format:Y-m-d|before:today',
            'phone'                => 'required|numeric|digits_between:10,15',
            'address'              => 'required|string|max:255',
        ];
    }
}
