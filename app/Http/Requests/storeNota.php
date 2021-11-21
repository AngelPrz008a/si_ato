<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeNota extends FormRequest
{

    public function authorize()
    {
        return true;
    }



    public function rules()
    {
        return [
            'titulo'=>  'required',
            'nota'=>    'required',
        ];
    }
}
