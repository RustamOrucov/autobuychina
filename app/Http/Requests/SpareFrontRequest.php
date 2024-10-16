<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpareFrontRequest extends FormRequest
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
        $data = [
            'price' => 'required|numeric|max:200000',
            'spareimages' => 'nullable|array',
            'spareimages.*' => 'file|mimes:jpg,jpeg,png,webp,gif,svg|max:6048',
        ];

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
