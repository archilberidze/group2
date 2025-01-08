<?php

namespace App\Actions\task;

use App\Http\Requests\GetTaskRequest;
use App\Http\Resources\GetTasksResource;
use App\Models\task;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class getTask extends Action
{
    public function handle(array $data)
    {
        $tasks = task::find($data['id']);
        return response()->json(new GetTasksResource($tasks));
    }

    public function asController(GetTaskRequest $request): JsonResponse
    {
        return $this->handle($request->validated());
    }
}
