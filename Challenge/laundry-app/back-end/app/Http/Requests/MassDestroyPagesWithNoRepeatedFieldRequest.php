<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroypagesWithNoRepeatedFieldRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('pages_with_no_repeated_field_delete'), 403, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:pages_with_no_repeated_fields,id',
        ];
    }
}
