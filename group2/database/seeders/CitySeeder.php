<?php

namespace Database\Seeders;

use App\Models\city;
use App\Models\country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $country = country::create(['name' => 'Georgia']);
        $data = [
            ['name' => 'Lagodekhi', 'population' => 5614, 'country_id' => $country->id],
            ['name' => 'Kutaisi', 'population' => 125589, 'country_id' => $country->id],
            ['name' => 'Tbilisi', 'population' => 1259000, 'country_id' => $country->id],
        ];

        foreach ($data as $city) {
            city::create($city);
        }
    }
}
