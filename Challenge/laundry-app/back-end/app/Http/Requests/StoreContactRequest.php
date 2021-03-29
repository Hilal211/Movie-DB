<?php

namespace App\Http\Requests;

use App\Contact;
use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'subject' => [
                'required',
            ],
            'message' => [
                'required',
            ],
            'email'   => [
                'required',
            ],
        ];
    }
}
