<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10000; $i++) {
            $carId = DB::table('cars')->insertGetId([
                'year' => $faker->year,
                'lot' => $faker->numerify('LOT###'),
                'item_number' => $faker->numerify('ITEM###'),
                'warning_lights' => $faker->boolean ? 'Yes' : 'No',
                'actual' => $faker->boolean ? 'Yes' : 'No',
                'of_passenger' => $faker->numberBetween(2, 7),
                'registration_date' => $faker->dateTimeThisDecade,
                'car_image' =>'car_image/9c62fa75-fbac-4571-9ec6-16c0be4f2725.webp',
                'price' => $faker->randomFloat(2, 10000, 100000),
                'status' => 1,
                'higlit_id' => 1,
                'odometer_id' => 1,
                'car_models_id' => 1,
                'model_type_id' => 1,
                'engine_work_id' => 1,
                'ro_id' => 1,
                'engine_volume_id' => 1,
                'damage_id' => 1,
                'fuel_type_id' => 1,
                'transmission_id' => 1,
                'engine_type_id' => 1,
                'cylinder_id' => 1,
                'drive_id' => 2,
                'ban_id' => 1,
                'car_equipment' => json_encode(array_map('intval', [1, 2])),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('cars_translations')->insert([
                [
                    'car_id' => $carId,
                    'name' => $faker->word,
                    'item_comment' => $faker->sentence,
                    'locale' => 'en',
                ],
                [
                    'car_id' => $carId,
                    'name' => $faker->word,
                    'item_comment' => $faker->sentence,
                    'locale' => 'tr',
                ]
            ]);
        }
    }
}
