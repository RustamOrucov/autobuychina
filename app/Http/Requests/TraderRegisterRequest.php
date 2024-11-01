<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TraderRegisterRequest extends FormRequest
{
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
            'name'=>'required|string|max:200',
            'surname'=>'required|string|max:200',
            'email'=>'required|email|unique:traders,email,max:200',
            'adress'=>'required|string|max:200',
            't_name'=>'required|string|unique:traders,t_name,max:200',
            'phone'=>'required|string|max:200',
            'license_number'=>'required|string|max:200',
            'password' => 'required|min:3|confirmed',
            'passport_front' => 'required|file|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:5048',
            'passport_back' => 'required|file|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:5048',
        ];
    }
}
