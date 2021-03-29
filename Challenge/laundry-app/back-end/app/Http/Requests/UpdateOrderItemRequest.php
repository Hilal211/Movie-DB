<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateOrderItemRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('order_item_edit');
    }

    public function rules()
    {
        return [
            'order_id'     => [
                'required',
                'integer',
            ],
            'item_type_id' => [
                'required',
                'integer',
            ],
            'status' => [
                'string',
                Rule::in( [ 'pending', 'processing', 'done' ] ),
            ]
        ];
    }
}
