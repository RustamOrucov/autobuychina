<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminSettingRequest extends FormRequest
{
    public function rules(): array
    {

        $data= [];

        return $this->mapLanguageValidations($data);
    }
    private function mapLanguageValidations($data){
        foreach (config('app.languages') as $lang){
            $data[$lang]='required|array';
            $data["$lang.mobile_footer.string"]= "$lang Footer Is Required";
            $data["$lang.footer_text.string"]= "$lang Footer Text Is Required";
            $data["$lang.mobile_copyright.string"]= "$lang Copyright Is Required";
        }
        return $data;
    }
}
