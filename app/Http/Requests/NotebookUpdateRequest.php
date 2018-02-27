<?php

namespace Biosistemas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotebookUpdateRequest extends FormRequest
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
            'descripcion'=>'required|max:400',
            'descripcionB'=>'max:400',
            'video'=>'required|max:80',
            'resolucion'=>'required|max:80',
            'bateria'=>'required|max:80',
            'conectividad'=>'required|max:120',
            'so'=>'required|max:80',
            'color'=>'required|max:40',
            'peso'=>'numeric',
        ];
    }
    public function attributes()
    {
        return [
            'descripcionB' => 'descripcion 2'
        ];
    }
}
