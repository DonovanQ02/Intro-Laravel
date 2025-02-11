<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorClientes extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtnombre' => 'required|min:5|max:255',
            'txtapellido' => 'required|min:5|max:255',
            'txtcorreo' => 'required|email',
            'txttelefono'=> 'required|numeric'
        ];
    }
}
