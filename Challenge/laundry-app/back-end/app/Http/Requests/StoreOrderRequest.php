<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOrderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'customer_id'  => [
                'required',
                'integer',
                'exists:users,id'
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
