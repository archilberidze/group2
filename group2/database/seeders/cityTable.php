<?php

namespace Database\Seeders;

use App\Models\city;
use App\Models\country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class cityTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $country1 = country::create(['name' => 'Georgia']);
        $country2 =country::create(['name' => 'Turkey']);
        $country3 =country::create(['name' => 'France']);
        $country4 =country::create(['name' => 'Spain']);
        $country5 =country::create(['name' => 'Italy']);


        $cities = [
            ['name'=>'Tbilisi', 'country_id'=> $country1->id],
            ['name'=>'Kutaisi', 'country_id'=> $country1->id],
            ['name'=>'Samtredia', 'country_id'=> $country1->id],
            ['name'=>'Istanbul', 'country_id'=>$country2->id],
            ['name'=>'Paris', 'country_id'=>$country3->id],
            ['name'=>'Madrid', 'country_id'=>$country4->id],
            ['name'=>'Rome', 'country_id'=>$country5->id],
        ];

        foreach ($cities as $city) {
            city::create($city);
        }
    }

}
