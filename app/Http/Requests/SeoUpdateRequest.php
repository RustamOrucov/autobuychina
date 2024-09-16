<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeoUpdateRequest extends FormRequest
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

        ];
        return $this->mapLanguageValidations($data);
    }
    private function mapLanguageValidations($data)
    {

        foreach (config('app.languages') as $lang) {
            $data["$lang"] = 'required|array';
            $data["$lang.seo_title"] = 'nullable|string|max:255';
            $data["$lang.seo_description"] = 'nullable|string';
            $data["$lang.seo_key"] = 'nullable|string';
        }


        return $data;
    }
}
