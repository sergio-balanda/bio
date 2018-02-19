<?php

namespace Biosistemas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotebookCreateRequest extends FormRequest
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
            'procesador'=>'required|max:120',
            'disco_rigido'=>'required|max:120',
            'ram'=>'required|max:120',
            'descripcion'=>'required|max:255',
            'descripcionB'=>'max:255',
            'video'=>'required|max:80',
            'resolucion'=>'required|max:80',
            'bateria'=>'required|max:80',
            'conectividad'=>'required|max:120',
            'so'=>'required|max:80',
            'color'=>'required|max:40',
            'peso'=>'numeric',
            //'peso'=>'regex:/^\d*(\.\d{1,2})?$/',
        ];
    }
}
