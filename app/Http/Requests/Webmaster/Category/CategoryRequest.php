<?php

namespace App\Http\Requests\Webmaster\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'parent_id' => 'nullable|exists:categories,id',
            'name' => 'required|unique:categories|min:3|max:255',
            'description' => 'nullable',
            'thumbnail' => 'nullable',
            'active' => 'boolean',
        ];
    }
}
