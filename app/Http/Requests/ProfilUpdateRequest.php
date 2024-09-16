<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProfilUpdateRequest extends FormRequest
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
           $adminId=Auth::guard('admin')->user()->id;
//           dd($adminId);
        return [
            'first_name'=>'nullable|string|max:100',
            'last_name'=>'nullable|string|max:100',
            'email' => 'required|email|unique:admin,email,' . $adminId,
            'number'=>'nullable|max:20',
            'city'=>'nullable|string|max:100',
            'address'=>'nullable|string|max:100',
            'password'=>'nullable|string|min:3|confirmed',
        ];
    }
}
