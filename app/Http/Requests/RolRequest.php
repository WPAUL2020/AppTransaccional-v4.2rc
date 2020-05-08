<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RolRequest extends FormRequest
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
        'NOMBRE_ROL' => 'min:4|max:120|requierd',
        'DESCRIPCION' => 'min:4|max:120|requierd',
        'DEPENDENCIA' => 'min:4|max:120|requierd',
        
        ];
    }
}
