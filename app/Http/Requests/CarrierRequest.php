<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarrierRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => ['required'],
            'phone' => ['required', 'max:20', 'min:9'],
            'email' => ['required', 'email'],
            'file_cv' => ['required', 'file', 'max:1024'],
        ];
    }
}
