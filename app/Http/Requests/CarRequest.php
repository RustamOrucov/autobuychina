<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    public function rules(): array
    {
        $data = [
            'car_models_id' => 'required|integer',
            'model_type_id' => 'required|integer',
            'engine_volume_id' => 'required|integer',
            'engine_v' => 'required|string',
            'fuel_type_id' => 'required|integer',
            'transmission_id' => 'required|integer',
            'year' => 'required|integer',
            'of_passenger' => 'required|integer',
            'price' => 'required|numeric',
            'ro_id' => 'required|integer',
            'drive_id' => 'required|integer',
            'damage_id' => 'required|integer',
            'cylinder_id' => 'required|integer',
            'youtube_video' => 'nullable|url',
            'ban_id' => 'required|integer',
            'vincode' => 'required|string',
            'odometer_km' => 'required|numeric',
            'steering_wheel' => 'required|boolean',
            'status' => 'required|boolean',
            'car_equipment' => 'nullable|array',
            'car_equipment.*' => 'integer',
            'car_image' => 'nullable|file|mimes:jpg,jpeg,png,webp,gif,svg|max:6048',
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
