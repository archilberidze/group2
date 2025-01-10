<?php

namespace Database\Seeders;

use App\Models\city;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Lagodekhi', 'population' => 5614],
            ['name' => 'Kutaisi', 'population' => 125589],
            ['name' => 'Tbilisi', 'population' => 1259000],
        ];

        foreach ($data as $city) {
            city::create($city);
        }
    }
}
