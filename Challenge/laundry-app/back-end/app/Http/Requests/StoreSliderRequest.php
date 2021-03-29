<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreSliderRequest extends FormRequest {
    public function authorize() {
        return Gate::allows( 'slider_create' );
    }
    
    public function rules() {
        return [
            'title' => [
                'required',
            ],
            'image' => [
                'required',
                'image',
            ],
        ];
    }
}
