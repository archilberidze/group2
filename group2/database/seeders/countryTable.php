<?php

namespace Database\Seeders;

use App\Models\country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class countryTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            ['name' => 'Georgia'],
            ['name' => 'Australia'],
            ['name' => 'Austria'],
            ['name' => 'Azerbaijan'],
            ['name' => 'Armenia'],
            ['name' => 'Belgium'],
            ['name' => 'Italy'],
            ['name' => 'Bolivia'],
            ['name' => 'Portugal'],
            ['name' => 'Brazil'],
            ['name' => 'Ukraine'],
            ['name' => 'Bulgaria'],
            ['name' => 'France'],
            ['name' => 'Spain'],
            ['name' => 'Turkey'],
            ['name' => 'USA'],
            ['name' => 'Canada'],
            ['name' => 'United Kingdom'],
            ['name' => 'India'],

        ];

        foreach ($data as $country) {
            country::create($country);
        }
    }
}
