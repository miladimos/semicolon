<?php

namespace App\Http\Requests\Webmaster\Discount;

use Illuminate\Foundation\Http\FormRequest;

class DiscountRequest extends FormRequest
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
            'title' => 'required|string|min:5|max:100|unique:discounts',
            'description' => 'nullable|string|min:10',
            'banner' => 'nullable|string|',
            'code' => 'required|string|unique:discounts', // ['required, Rule::unique('discounts', 'code')->ignore($discount->id)]
            'persent' => 'required|integer|between:1,100',
            'users' => 'nullable|array|exists:discounts,id',
            'courses' => 'nullable|array|exists:discounts,id',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
        ];
    }
}
