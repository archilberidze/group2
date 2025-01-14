<?php

namespace App\Actions\cars;

use App\Http\Resources\GetCarsResources;
use App\Models\Cars;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class GetCars extends  Action
{
    public function handle()
    {
        $cars = cars::all();


        return response()->json(GetCarsResources::collection($cars));
    }

    public function asController(): JsonResponse
    {
        return $this->handle();
    }

}
