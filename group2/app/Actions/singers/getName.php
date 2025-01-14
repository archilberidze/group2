<?php

namespace app\Actions\singers;

use App\Http\Requests\singersNameRequest;
use App\Http\Resources\GetSingersResourse;
use App\Models\singers;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class getName extends Action
{
public function handle(array $data){
    $name = $data['name'];
    $singers = singers::nameLike($name)->get();
    return  response()->json(GetSingersResourse::collection($singers));
}

public function asController(singersNameRequest $request): JsonResponse
{
    return $this->handle($request->validated());
}



}
