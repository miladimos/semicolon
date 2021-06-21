<?php

namespace App\Http\Requests\Webmaster\Book;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required|unique:books,title|min:3|max:255|string',
            'description' => 'required|unique:books,description|min:10|max:255|string',
            'active' => 'boolean|nullable',
            'published_at' => 'nullable',
            'file_path' => 'nullable',
            'thumbnail_path' => 'nullable',
            'lang' => 'required|string',
            'page_count' => 'required|string',
            'isbn' => 'nullable|unique:books',
            'shabak' => 'nullable|unique:books',
            'author' => 'required',
            'tags' => 'required',
            'categories' => 'required',
            'publisher_id' => 'required',
        ];
    }
}
