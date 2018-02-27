<?php

namespace Biosistemas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MonitorUpdateRequest extends FormRequest
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
            'resolucion'=>'required|max:80',
            'conectividad'=>'required|max:100',
            'curvatura'=>'required|max:80',
            'aspect_ratio'=>'required|max:80',
            'brightness'=>'required|max:80',
            'color'=>'required|max:50',
            'descripcion'=>'required|max:255',
        ];
    }
}
