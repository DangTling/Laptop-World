<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompaniesRequest extends FormRequest
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
            'name' => [
                'bail',
                'required',
                'string',
                'unique:companies,name',
            ],
            'email' => [
                'bail',
                'required',
                'string',
                'unique:companies,email',
            ],
            'headquarter' => [
                'bail',
                'required',
                'string',
            ],
            'description' => [
                'bail',
                'required',
                'string',
            ],
            'phone_number' => [
                'bail',
                'required',
                'integer',
                'unique:companies,phone_number',
            ],
            'logo' => [
                'required',
            ]
        ];
    }
}
