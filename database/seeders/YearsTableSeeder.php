<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $startYear = 1990;
        $endYear = date('Y');

        for ($year = $startYear; $year <= $endYear; $year++) {
            DB::table('years')->updateOrInsert(
                ['year' => $year],
                ['year' => $year]
            );
        }
    }
}
