<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SoldRequest extends FormRequest
{
    public function rules(): array
    {
        $data= [
            'image'=> [Rule::requiredIf(request()->method == self::METHOD_POST),'image','mimes:jpg,jpeg,png,webp'],
            'name' => 'string'
        ];
        return $data;
    }
}
