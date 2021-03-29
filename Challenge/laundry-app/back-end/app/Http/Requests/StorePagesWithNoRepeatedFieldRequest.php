<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StorePagesWithNoRepeatedFieldRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pages_with_no_repeated_field_create');
    }

    public function rules()
    {
        return [
        ];
    }
}
