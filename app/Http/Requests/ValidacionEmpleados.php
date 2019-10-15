<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionEmpleados extends FormRequest
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
            'nombre_emp' => 'required|max:45',
            'nombre_s'=> 'required|max:45',
            'apellido_emp'=> 'required|max:45',
            'apellido_s'=> 'required|max:45',
            'ci_emp'=> 'required|max:45|unique:empleados,ci_emp,'.$this->route('id')
        ];
    }
}
