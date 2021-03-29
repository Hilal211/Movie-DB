<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateContactRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('contact_edit');
    }

    public function rules()
    {
        return [
            'subject'      => [
                'string',
            ],
            'message'      => [
                'string',
            ],
            'email'        => [
                'email'
            ],
            'name'         => [
                'string'
            ],
            'address'      => [
                'string'
            ],
            'phone_number' => [
                'string'
            ],
        ];
    }
    
    protected function failedValidation( Validator $validator ) {
        throw new HttpResponseException(
            response()->json( [
                'success'   => false,
                'messages' => $validator->errors()->all()
            ], 200 )
        );
    }
}
