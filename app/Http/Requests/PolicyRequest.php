<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PolicyRequest extends FormRequest
{
    public function rules(): array
    {

        $data= [

        ];

        return $this->mapLanguageValidations($data);
    }
    private function mapLanguageValidations($data){
        foreach (config('app.languages') as $lang){
            $data[$lang]='required|array';
            $data["$lang.agreement.string"]= "$lang agreement Is Required";
            $data["$lang.rules.string"]= "$lang rules Is Required";
        }
        return $data;
    }
}
