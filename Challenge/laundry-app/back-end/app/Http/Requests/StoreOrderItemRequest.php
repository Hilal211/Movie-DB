<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOrderItemRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('order_item_create');
    }

    public function rules()
    {
        return [
            'order_id'     => [
                'required',
                'integer',
                'exists:orders'
            ],
            'item_type_id' => [
                'required',
                'integer',
                'exists:items_types'
            ],
            'status' => [
                'string',
                Rule::in( [ 'pending', 'processing', 'done' ] ),
            ]
        ];
    }
}
