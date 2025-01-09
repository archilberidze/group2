<?php

namespace App\Actions\task;

use App\Http\Requests\taskTittleRequest;
use App\Http\Resources\GetTasksResource;
use App\Models\task;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class getTittle extends Action
{

    public function handle(array $data)
    {
        $tittle =$data['tittle'];
        $tasks = task::tittleLike($tittle)->get();
        return response()->json(GetTasksResource::collection($tasks));

    }

    public function asController(taskTittleRequest $request): JsonResponse
    {
        return $this->handle($request->validated());
    }
}
