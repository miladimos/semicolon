<?php

namespace App\Http\Requests\Webmaster\Tag;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:tags|min:3|max:30'
        ];
    }
}
