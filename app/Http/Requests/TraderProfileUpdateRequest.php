<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TraderProfileUpdateRequest extends FormRequest
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
            'name'=>'nullable|string|max:200',
            'surname'=>'nullable|string|max:200',
            'email'=>'nullable|email|:traders,email,max:200',
            'adress'=>'nullable|string|max:200',
            't_name'=>'nullable|string|:traders,t_name,max:200',
            'phone'=>'nullable|string|max:200',
            'license_number'=>'nullable|string|max:200',
            'password' => 'nullable|min:3|confirmed',
            'passport_front' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:5048',
            'passport_back' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:5048',
            'title' => 'nullable|string|max:200',
            'content' => 'nullable|string|max:500',
        ];
    }
}
