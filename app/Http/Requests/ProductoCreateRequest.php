<?php

namespace Biosistemas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoCreateRequest extends FormRequest
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
            'titulo'=>'required|max:120',
            'nombre'=>'required|unique:productos|max:255',
            'precio'=>'required|numeric',
            'imagen'=>'required|image',
            'imagen1'=>'required|image',
            'imagen2'=>'image',
            'imagen3'=>'image',
            'imagen4'=>'image',
        ];
    }
    public function attributes()
    {
        return [
            'imagen1' => 'imagen 2',
            'imagen2' => 'imagen 3',
            'imagen3' => 'imagen 4',
            'imagen4' => 'imagen 5',
        ];
    }
}
