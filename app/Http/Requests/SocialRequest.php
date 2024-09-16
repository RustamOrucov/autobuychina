<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SocialRequest extends FormRequest
{
   public function rules() :array{
       $data = [
           'image'=> [Rule::requiredIf(request()->method == self::METHOD_POST),'image','required|mimes:jpg,jpeg,png,webp,svg'],
           'url' => 'string',
           'class' => 'string'
       ];
       return $data;
   }
}
