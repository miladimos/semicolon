<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|unique:publications,username|min:3|max:120',
            'title' => 'required|unique:publications,title|min:3|max:120',
            'description' => 'required|min:3|max:250',
            'logo' => 'nullable',
            'banner' => 'nullable',
            'brand_color' => 'nullable',
            'site' => 'nullable',
            'twitter' => 'nullable',
            'telegram' => 'nullable',
            'instagram' => 'nullable',
        ];
    }
}
