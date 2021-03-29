<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateOrderRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('order_edit');
    }

    public function rules()
    {
        return [
            'customer_id' => [
                'required',
                'integer',
            ],
            'priority'     => [
                'boolean',
            ],
            'order_status' => [
                'string',
                Rule::in( [ 'pending', 'processing', 'done' ] ),
            ]
        ];
    }
}
