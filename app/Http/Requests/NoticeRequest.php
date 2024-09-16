<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticeRequest extends FormRequest
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
            'az' => 'required|array',
            'az.title' => 'nullable|string|max:255',
            'az.header' => 'nullable|string|max:255',
            'az.content' => 'nullable|string',

            'en' => 'required|array',
            'en.title' => 'nullable|string|max:255',
            'en.header' => 'nullable|string|max:255',
            'en.content' => 'nullable|string',

            'ru' => 'required|array',
            'ru.title' => 'nullable|string|max:255',
            'ru.header' => 'nullable|string|max:255',
            'ru.content' => 'nullable|string',
        ];
    }
}
