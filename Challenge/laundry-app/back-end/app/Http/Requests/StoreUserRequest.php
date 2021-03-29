<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;


/**
 * Class StoreUserRequest
 * @package App\Http\Requests
 */
class StoreUserRequest extends FormRequest {
    
    public function authorize() {
        return \Gate::allows( 'user_create' );
    }
    
    public function rules() {
        return [
            'first_name'  => [
                'required',
            ],
            'last_name'   => [
                'required',
            ],
            'middle_name' => [
                'required',
            ],
            'email'       => [
                'required',
                'unique:users'
            ],
            'password'    => [
                'required',
            ],
            'roles.*'     => [
                'integer',
            ],
            'roles'       => [
                'required',
                'array',
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
