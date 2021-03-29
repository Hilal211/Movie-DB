<?php

namespace App\Http\Requests;

use App\ContentTag;
use Illuminate\Foundation\Http\FormRequest;

class StoreContentTagRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('content_tag_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
        ];
    }
}
