<?php

namespace App\Services;

use App\Models\Car;
use App\Repositories\CarRepository;

class CarFilterService
{
    public function __construct(protected CarRepository $repository)
    {
    }

    public function filter(array $filters)
    {
        $query = $this->repository->query();

        if (!empty($filters['q']['make'])) {
            $query->where('car_models_id', $filters['q']['make']);
        }

        if (!empty($filters['q']['model'])) {
            $query->where('model_type_id', $filters['q']['model']);
        }

        if (!empty($filters['q']['used'])) {
            $query->where('used', $filters['q']['used']);
        }

        if (!empty($filters['q']['regions'][0])) {
            $regions = explode(',', $filters['q']['regions'][0]);
            $query->whereIn('region_id', $regions);
        }

        if (!empty($filters['q']['ban'][0])) {
            $regions = explode(',', $filters['q']['ban'][0]);
            $query->whereIn('ban_id', $regions);
        }

        if (!empty($filters['q']['colors'][0])) {
            $regions = explode(',', $filters['q']['colors'][0]);
            $query->whereIn('cylinder_id', $regions);
        }

        if (!empty($filters['q']['fuel_types'][0])) {
            $regions = explode(',', $filters['q']['fuel_types'][0]);
            $query->whereIn('fuel_type_id', $regions);
        }

        if (!empty($filters['q']['gears'][0])) {
            $regions = explode(',', $filters['q']['gears'][0]);
            $query->whereIn('transmission_id', $regions);
        }

        if (!empty($filters['q']['transmissions'][0])) {
            $regions = explode(',', $filters['q']['transmissions'][0]);
            $query->whereIn('damage_id', $regions);
        }

        if (!empty($filters['q']['seats_count'][0])) {
            $regions = explode(',', $filters['q']['seats_count'][0]);
            $query->whereIn('of_passenger', $regions);
        }

        if (!empty($filters['q']['markets'][0])) {
            $regions = explode(',', $filters['q']['markets'][0]);
            $query->whereIn('market_id', $regions);
        }

        if (!empty($filters['q']['equipments'])) {
            $equipmentIds = $filters['q']['equipments'];
            $query->whereJsonContains('car_equipment', $equipmentIds);
        }

        if (!empty($filters['q']['price_min']) && !empty($filters['q']['price_max'])) {
            $query->whereBetween('year', [(float)$filters['q']['price_min'], (float)$filters['q']['price_max']]);
        } elseif (!empty($filters['q']['price_min'])) {
            $query->where('year', '>=', (float)$filters['q']['price_min']);
        } elseif (!empty($filters['q']['price_max'])) {
            $query->where('year', '<=', (float)$filters['q']['price_max']);
        }

        if (!empty($filters['q']['min_year']) && !empty($filters['q']['max_year'])) {
            $query->whereBetween('year', [(float)$filters['q']['min_year'], (float)$filters['q']['max_year']]);
        } elseif (!empty($filters['q']['min_year'])) {
            $query->where('year', '>=', (float)$filters['q']['min_year']);
        } elseif (!empty($filters['q']['max_year'])) {
            $query->where('year', '<=', (float)$filters['q']['max_year']);
        }

        if (!empty($filters['q']['engine_min']) && !empty($filters['q']['engine_max'])) {
            $query->whereBetween('engine_volume_id', [(float)$filters['q']['engine_min'], (float)$filters['q']['engine_max']]);
        } elseif (!empty($filters['q']['engine_min'])) {
            $query->where('engine_volume_id', '>=', (float)$filters['q']['engine_min']);
        } elseif (!empty($filters['q']['engine_max'])) {
            $query->where('engine_volume_id', '<=', (float)$filters['q']['engine_max']);
        }

        if (!empty($filters['q']['power_from']) && !empty($filters['q']['power_to'])) {
            $query->whereBetween('engine_v', [(float)$filters['q']['power_from'], (float)$filters['q']['power_to']]);
        } elseif (!empty($filters['q']['power_from'])) {
            $query->where('engine_v', '>=', (float)$filters['q']['power_from']);
        } elseif (!empty($filters['q']['power_to'])) {
            $query->where('engine_v', '<=', (float)$filters['q']['power_to']);
        }

        if (!empty($filters['q']['mileage_from']) && !empty($filters['q']['mileage_to'])) {
            $query->whereBetween('odometer_km', [(float)$filters['q']['mileage_from'], (float)$filters['q']['mileage_to']]);
        } elseif (!empty($filters['q']['mileage_from'])) {
            $query->where('odometer_km', '>=', (float)$filters['q']['mileage_from']);
        } elseif (!empty($filters['q']['mileage_to'])) {
            $query->where('odometer_km', '<=', (float)$filters['q']['mileage_to']);
        }

        return $query;
    }


}
