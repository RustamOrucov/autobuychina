<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:200',
            'surname' => 'required|string|max:200',
            'address' => 'required|string|max:200',
            'fin_code' => 'required|string|min:7|max:7',
            'email' => 'required|email|max:100|unique:users,email',
            'phone' => 'required|string|min:9|max:15',
            'password' => 'required|min:3|confirmed',
            'passport_front' => 'required|file|mimes:jpeg,png,jpg,gif,svg,webp|max:5048',
            'passport_back' => 'required|file|mimes:jpeg,png,jpg,gif,svg,webp|max:5048',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Ad sahəsi tələb olunur.',
            'surname.required' => 'Soyad sahəsi tələb olunur.',
            'address.required' => 'Ünvan sahəsi tələb olunur.',
            'fin_code.required' => 'FIN kodu tələb olunur.',
            'fin_code.min' => 'FIN kodu ən az 7 simvol olmalıdır.',
            'fin_code.max' => 'FIN kodu ən çox 7 simvol olmalıdır.',
            'email.required' => 'Email sahəsi tələb olunur.',
            'email.email' => 'Email düzgün formatda olmalıdır.',
            'email.unique' => 'Bu email artıq istifadə olunub.',
            'phone.required' => 'Telefon nömrəsi tələb olunur.',
            'phone.min' => 'Telefon nömrəsi ən az 9 simvol olmalıdır.',
            'phone.max' => 'Telefon nömrəsi ən çox 15 simvol olmalıdır.',
            'password.required' => 'Şifrə tələb olunur.',
            'password.min' => 'Şifrə ən az 3 simvol olmalıdır.',
            'password.confirmed' => 'Şifrələr uyğun gəlmir.',
            'passport_front.required' => 'Ön kimlik şəkli tələb olunur.',
            'passport_front.file' => 'Ön kimlik fayl olmalıdır.',
            'passport_front.mimes' => 'Ön kimlik şəkli yalnız jpeg, png, jpg, gif, svg, webp formatlarında olmalıdır.',
            'passport_front.max' => 'Ön kimlik şəkli maksimum 5048 kilobayt olmalıdır.',
            'passport_back.required' => 'Arxa kimlik şəkli tələb olunur.',
            'passport_back.file' => 'Arxa kimlik fayl olmalıdır.',
            'passport_back.mimes' => 'Arxa kimlik şəkli yalnız jpeg, png, jpg, gif, svg, webp formatlarında olmalıdır.',
            'passport_back.max' => 'Arxa kimlik şəkli maksimum 5048 kilobayt olmalıdır.',
        ];
    }
}
