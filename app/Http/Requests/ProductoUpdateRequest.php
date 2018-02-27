<?php

namespace Biosistemas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoUpdateRequest extends FormRequest
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
        ];
    }
}
