<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeCreateRule extends FormRequest
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
            'ime' => 'required|string|min:3|max:50',
            'prezime' => 'required|string|min:3|max:50',
            'email' => 'required',
            'mesto' => 'required',
            'godiste' => 'required',
            'broj_mobilnog' => 'required',
            'broj_kucnog' => 'required',
            'pozicija' => 'required',
            'permissions' => 'required',
            'pocetak_rada' => 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'ime.required' => 'First name is required',
            'prezime.required' => 'Last name is required',
        ];
    }
}
