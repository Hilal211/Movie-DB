<?php

namespace App\Http\Requests;

use App\Http\Requests\APIFormRequest as APIFormRequest;

class UpdateUserRequest extends APIFormRequest
{
    public function authorize()
    {
        return \Gate::allows('user_edit');
    }

    public function rules()
    {
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
            'email'   => [
                'required',
                'email'
            ],
            'roles.*' => [
                'integer',
            ],
            'roles'   => [
                'required',
                'array',
            ],
        ];
    }
}
