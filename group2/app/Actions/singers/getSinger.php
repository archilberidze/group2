<?php

namespace App\Actions\singers;

use App\Http\Requests\GetSingerRequest;
use App\Http\Resources\GetSingersResourse;
use App\Models\singers;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class getSinger extends Action
{
    public function handle(array $data){
        $singer = singers::find($data['id']);
        return response()->json(new GetSingersResourse($singer));
    }

    public function asController(GetSingerRequest $request): JsonResponse
    {
        return $this->handle($request->validated());
    }
}
