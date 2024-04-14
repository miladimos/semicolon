<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountInformationRequest extends FormRequest
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
            'fname' => 'nullable',
            'lname' => 'nullable',
            'bio' => 'nullable',
            'avatar' => 'nullable',
            'banner' => 'nullable',
            'birthday' => 'nullable',
            'username' => 'nullable',
        ];
    }
}
