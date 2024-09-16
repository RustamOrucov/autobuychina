<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuctionTimeRequest extends FormRequest
{
    public function rules(): array
    {

        $data= [
            'time' => 'integer|required',
        ];

        return $data;
    }
}
