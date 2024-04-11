<?php

namespace App\Http\Requests\Webmaster\Article;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title'          => 'required',
            'description'    => 'required',
            'body'           => 'required',
            'thumbnail_path' => 'required',
            'status'         => 'required',
            'pinned'         => 'required',
        ];
    }
}
