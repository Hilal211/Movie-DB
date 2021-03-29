<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSliderRequest extends FormRequest {
    public function authorize() {
        return Gate::allows( 'slider_edit' );
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
