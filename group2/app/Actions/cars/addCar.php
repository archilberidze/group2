<?php

namespace App\Actions\cars;

use App\Http\Requests\AddCarRequest;
use App\Models\cars;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class addCar extends Action
{
    public function handle(array $data): JsonResponse
    {
        $car = new Cars();
        $car->name = $data['name'];
        $car->model = $data['model'];
        $car->save();

        return response()->json(['message' => 'Car created successfully'], 201);
    }

    public function asController(addCarRequest $request): JsonResponse{
        return $this->handle($request->validated());
    }
}
