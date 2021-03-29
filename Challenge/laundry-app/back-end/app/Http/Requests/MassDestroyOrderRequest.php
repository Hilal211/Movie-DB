<?php

namespace App\Http\Requests;

use App\Order;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyOrderRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('order_delete'), 403, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:orders,id',
        ];
    }
}
