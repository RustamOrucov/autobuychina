<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpareRequest extends FormRequest
{
    public function rules(): array
    {
        $data = [
            'price' => 'required|numeric',
            'spare_image' => 'nullable|file|mimes:jpg,jpeg,png,webp,gif,svg|max:6048',
        ];

        // Add language-based validations
        $data = array_merge($data, $this->mapLanguageValidations());

        return $data;
    }

    private function mapLanguageValidations(): array
    {
        $data = [];

        foreach (config('app.languages') as $lang) {
            $data["$lang"] = 'required|array';
            $data["$lang.name"] = 'nullable|string';
            $data["$lang.item_comment"] = 'nullable|string';
        }

        return $data;
    }
}
