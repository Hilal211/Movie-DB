<?php

namespace App\Http\Requests;

use App\ItemsType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyItemsTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('items_type_delete'), 403, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:items_types,id',
        ];
    }
}
