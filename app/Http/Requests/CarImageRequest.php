<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarImageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg,webp|max:5048',
        ];
    }


}
