<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class YoutubeVideoRequest extends FormRequest
{
    public function rules(): array{
        $data = [
            'title' => 'string',
            'url' => 'string',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg,webp|max:5048',
        ];
        return $data;
    }
}
