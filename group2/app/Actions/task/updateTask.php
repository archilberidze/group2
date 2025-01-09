<?php

namespace App\Actions\task;

use App\Http\Requests\GetTaskRequest;
use App\Http\Requests\updateTaskRequest;
use App\Http\Resources\GetTasksResource;
use App\Models\task;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class updateTask extends Action

{
    public function handle(int $id, array $data)
    {
        $tasks = task::find($id);

        $tasks->update($data);
        return response()->json(new GetTasksResource($tasks));
    }

    public function asController(int $id,updateTaskRequest $request): JsonResponse
    {
        return $this->handle($id, $request->validated());
    }
}
