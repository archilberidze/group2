<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        DB::table('cities')->truncate();
        $country = country::create(['name' => 'Usa']);
        $data = [
            ['name' => 'LA', 'country_id' => $country->id],
            ['name' => 'NYC' ,'country_id' => $country->id],
            ['name' => 'Washington' ,'country_id' => $country->id],
        ];

        foreach ($data as $cities) {
            City::create($cities);
        }
    }
}
