<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DelaerProfileUpdateRequest extends FormRequest
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
            'name' => 'required|string|max:200',
            'surname' => 'required|string|max:200',
            'email' => 'required|email|unique:dealers,email,' . $this->dealer->id . '|max:200',
            'adress' => 'required|string|max:200',
            'd_name' => 'required|string|unique:dealers,d_name,' . $this->dealer->id . '|max:200',
            'phone' => 'required|string|max:200',
            'password' => 'nullable|string|min:3|confirmed',
            'opening_time' => 'nullable|string|max:10',
            'closing_time' => 'nullable|string|max:10',
            'latitude' => 'nullable|numeric|min:-90|max:90',
            'longitude' => 'nullable|numeric|min:-180|max:180',
            'logo' => 'nullable|file|mimes:jpg,jpeg,png,webp,gif,svg|max:6048',
            'background' => 'nullable|file|mimes:jpg,jpeg,png,webp,gif,svg|max:6048',
            'title' => 'nullable|string|max:200',
            'content' => 'nullable|string|max:500',
        ];
    }
}
