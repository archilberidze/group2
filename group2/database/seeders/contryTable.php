<?php

namespace Database\Seeders;

use App\Models\country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function Laravel\Prompts\form;

class contryTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[
            ['name' => 'Georgia'],
            ['name' => 'Usa'],
            ['name' => 'France']
        ];

        foreach ($data as $country){

            country::create($country);
        }
    }
}
