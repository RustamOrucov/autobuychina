<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MobileCarRegisterRequest extends FormRequest
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
            'dealer_id'=>'required|exists:dealers,id',
            'car_models_id' => 'required|integer|exists:carmodels,id',
            'model_type_id' => 'required|integer|exists:model_types,id',
            'engine_volume_id' => 'required|integer|exists:engine_volumes,id',
            'engine_v' => 'required|string',
            'fuel_type_id' => 'required|integer|exists:fuel_types,id',
            'transmission_id' => 'required|integer|exists:transmissions,id',
            'year' => 'required|integer|exists:years',
            'of_passenger' => 'nullable|integer|max:10',
            'price' => 'required|numeric|max:200000',
            // 'ro_id' => 'required|integer|exists:ros,id',
            // 'drive_id' => 'required|integer|exists:drives,id',
            'damage_id' => 'required|integer|exists:damages,id',
            'cylinder_id' => 'required|integer|exists:cylinders,id',
            'ban_id' => 'required|integer|exists:bans,id',
            'vincode' => 'nullable|string|max:20',
            'odometer_km' => 'required|numeric',
            'car_equipment' => 'nullable|array',
            'car_equipment.*' => 'integer',
            'crashed' => 'nullable|boolean',
            'painted' => 'nullable|boolean',
            'for_spare_parts' => 'nullable|boolean',
            'carimages' => 'nullable|array',
            'carimages.*' => 'file|mimes:jpg,jpeg,png,webp,gif,svg|max:6048',
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
