<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB; // Import DB facade

class MobileLoginRequest extends FormRequest
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
            'email' => [
                'required',
                'email',
                function ($attribute, $value, $fail) {
                    $dealerExists = DB::table('dealers')->where('email', $value)->exists();
                    $traderExists = DB::table('traders')->where('email', $value)->exists();

                    if (!$dealerExists && !$traderExists) {
                        $fail('Email or Password is incorrect. Please try again.');
                    }
                }
            ],
            'password' => ['required', 'string', 'min:2', 'max:32'],
        ];
    }
}
