<?php

namespace App\Http\Requests\Webmaster\Publisher;

use Illuminate\Foundation\Http\FormRequest;

class PublisherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:publishers|min:3|max:30',
            'description' => 'required|unique:publishers|min:3|max:255',
            'logo' => 'nullable|unique:publishers|image',
        ];
    }
}
