<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransmissionRequest extends FormRequest
{
    public function rules(): array
    {

        $data= [];

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
