<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;


class APIFormRequest extends FormRequest {
    protected function failedValidation( Validator $validator ) {
        throw new HttpResponseException(
            response()->json( [
                'success'   => false,
                'messages' => $validator->errors()
            ], 200 )
        );
    }
}
