<?php

namespace Biosistemas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectorCreateRequest extends FormRequest
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
            'lumenes'=>'required|max:100',
            'lente'=>'max:100',
            'duracion'=>'max:100',
            'conectividad'=>'max:100',
            'descripcion'=>'required|max:400',
            'contraste'=>'max:100',
        ];
    }
}
