<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'q.make.*' => 'nullable|string',
            'q.model.*' => 'nullable|string',
            'q.used' => 'nullable|boolean',
            'q.regions' => 'nullable|array',
            'q.regions.*' => 'nullable|string',
            'q.price_min' => 'nullable|numeric|min:0',
            'q.price_max' => 'nullable|numeric|min:0',
            'q.price_model.*' => 'nullable|integer',
            'q.ban' => 'nullable|array',
            'q.ban.*' => 'nullable|string',
            'q.min_year.*' => 'nullable|integer|min:1900|max:' . date('Y'),
            'q.max_year.*' => 'nullable|integer|min:1900|max:' . date('Y'),
            'q.colors' => 'nullable|array',
            'q.colors.*' => 'nullable|string',
            'q.fuel_types' => 'nullable|array',
            'q.fuel_types.*' => 'nullable|string',
            'q.gears' => 'nullable|array',
            'q.gears.*' => 'nullable|string',
            'q.transmissions' => 'nullable|array',
            'q.transmissions.*' => 'nullable|string',
            'q.engine_min' => 'nullable|numeric|min:0',
            'q.engine_max' => 'nullable|numeric|min:0',
            'q.power_from' => 'nullable|numeric|min:0',
            'q.power_to' => 'nullable|numeric|min:0',
            'q.mileage_from' => 'nullable|numeric|min:0',
            'q.mileage_to' => 'nullable|numeric|min:0',
            'q.owners_count' => 'nullable|array',
            'q.owners_count.*' => 'nullable|string',
            'q.seats_count' => 'nullable|array',
            'q.seats_count.*' => 'nullable|string',
            'q.markets' => 'nullable|array',
            'q.markets.*' => 'nullable|string',
            'q.crashed' => 'nullable|boolean',
            'q.painted' => 'nullable|boolean',
            'q.only_damaged' => 'nullable|boolean',
            'q.equipments.*' => 'nullable|integer',
        ];
    }
}
