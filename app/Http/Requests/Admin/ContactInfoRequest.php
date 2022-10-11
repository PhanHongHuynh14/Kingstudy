<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ContactInfoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            'name' => 'required|max:250',
            'email' => [
                'required',
                'email',
                'regex:/^[a-zA-Z@.0-9]+$/',
            ],
            'phone' => ['required', 'numeric', 'digits_between:9,11'],
            'country_id' => 'required',
            'level_id' => 'required',
        ];
    }
}