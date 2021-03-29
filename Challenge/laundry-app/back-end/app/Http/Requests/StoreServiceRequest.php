<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('service_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'required',
            ],
            'image' => [
                'required',
                'image',
            ],
        ];
    }
}
