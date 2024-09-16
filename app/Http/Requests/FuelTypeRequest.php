<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuelTypeRequest extends FormRequest
{
    public function rules(): array
    {

        $data= [
            'status' => 'boolean',
        ];

        return $this->mapLanguageValidations($data);
    }
    private function mapLanguageValidations($data){
        foreach (config('app.languages') as $lang){
            $data[$lang]='required|array';
            $data["$lang.name.string"]= "$lang Name Is Required";
        }
        return $data;
    }
}
