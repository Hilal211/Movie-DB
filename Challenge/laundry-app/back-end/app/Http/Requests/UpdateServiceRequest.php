<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest {
    public function authorize() {
        return Gate::allows( 'service_edit' );
    }
    
    public function rules() {
        return [
            'title' => [
                'required',
            ],
            'image' => [
                'image',
            ]
        ];
    }
}
