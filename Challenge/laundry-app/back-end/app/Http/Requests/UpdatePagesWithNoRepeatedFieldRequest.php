<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdatepagesWithNoRepeatedFieldRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pages_with_no_repeated_field_edit');
    }

    public function rules()
    {
        return [
        ];
    }
}
