<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogoUpdateRequest extends FormRequest
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
            'icon'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:5120',
            'd_logo'=>'nullable|mimes:jpeg,png,jpg,gif,svg,webp|max:5120',
            'm_logo'=>'nullable|mimes:jpeg,png,jpg,gif,svg,webp|max:5120',
            'f_logo'=>'nullable|mimes:jpeg,png,jpg,gif,svg,webp|max:5120',
        ];
    }
    public function messages(): array
    {
        return [
            'icon.image' => 'İkon bir şəkil olmalıdır.',
            'icon.mimes' => 'İkon yalnız jpeg, png, jpg, gif, svg və ya webp formatında ola bilər.',
            'icon.max' => 'İkonun həcmi 5MB-dan böyük ola bilməz.',

            'd_logo.mimes' => 'Masaüstü loqosu yalnız jpeg, png, jpg, gif, svg və ya webp formatında ola bilər.',
            'd_logo.max' => 'Masaüstü loqosunun həcmi 5MB-dan böyük ola bilməz.',

            'm_logo.mimes' => 'Mobil loqosu yalnız jpeg, png, jpg, gif, svg və ya webp formatında ola bilər.',
            'm_logo.max' => 'Mobil loqosunun həcmi 5MB-dan böyük ola bilməz.',

            'f_logo.mimes' => 'Altbilgi loqosu yalnız jpeg, png, jpg, gif, svg və ya webp formatında ola bilər.',
            'f_logo.max' => 'Altbilgi loqosunun həcmi 5MB-dan böyük ola bilməz.',
        ];
    }
}
