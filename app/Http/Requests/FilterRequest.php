<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Kullanıcı yetkilendirme kontrolü
    }

    public function rules()
    {
        return [
            'q.make.*' => 'nullable|string',
            'q.model.*' => 'nullable|string',
            'q.used' => 'nullable|boolean',
            'q.regions.*' => 'nullable|integer',
            'q.price_from' => 'nullable|numeric|min:0',
            'q.price_to' => 'nullable|numeric|min:0',
            'q.price_model.*' => 'nullable|integer',
            'q.ban.*' => 'nullable|integer',
            'q.min_year.*' => 'nullable|integer|min:1900|max:' . date('Y'),
            'q.max_year.*' => 'nullable|integer|min:1900|max:' . date('Y'),
            'q.colors.*' => 'nullable|integer',
            'q.fuel_types.*' => 'nullable|integer',
            'q.gears.*' => 'nullable|integer',
            'q.transmissions.*' => 'nullable|integer',
            'q.engine_volume_from' => 'nullable|numeric|min:0',
            'q.engine_volume_to' => 'nullable|numeric|min:0',
            'q.power_from' => 'nullable|numeric|min:0',
            'q.power_to' => 'nullable|numeric|min:0',
            'q.mileage_from' => 'nullable|numeric|min:0',
            'q.mileage_to' => 'nullable|numeric|min:0',
            'q.owners_count.*' => 'nullable|integer|min:0',
            'q.seats_count.*' => 'nullable|integer|min:0',
            'q.markets.*' => 'nullable|integer',
            'q.crashed' => 'nullable|boolean',
            'q.painted' => 'nullable|boolean',
            'q.for_spare_parts' => 'nullable|boolean',
        ];
    }
}
