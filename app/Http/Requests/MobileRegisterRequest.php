<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MobileRegisterRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string|max:200',
            'surname' => 'required|string|max:200',
            'adress' => 'required|string|max:200',
            'phone' => 'required|string|max:200',
            'license_number' => 'required|string|max:200',
            'business_foto' => 'required|file|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:5048',
            'password' => 'required|min:3|confirmed',
            'passport_front' => 'required|file|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:5048',
            'passport_back' => 'required|file|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:5048',
        ];

        if (request()->input('costumer') === 'traider') {
            $rules['email'] = 'required|email|unique:traders,email|max:200';
            $rules['t_name'] = 'required|string|unique:traders,t_name|max:200';
        } elseif (request()->input('costumer') === 'dealer') {
            $rules['email'] = 'required|email|unique:dealers,email|max:200';
            $rules['d_name'] = 'required|string|unique:dealers,d_name|max:200';
        }
        return $rules;
    }

}
