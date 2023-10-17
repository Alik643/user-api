<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
          'email' => 'required|email',
          'name' => 'required|string',
          'age' => 'required|integer',
          'sex' => 'required|in:male,female',
          'birthday' => 'required|date',
          'phone' => 'required|string',
        ];
    }
}