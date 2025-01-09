<?php

namespace App\Actions\task;

use App\Http\Requests\addTaskRequest;
use App\Models\task;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Http\JsonResponse;

class addTask extends Action
{

    public function handle(array $data)
    {
       task::create($data);

        return response()->json(['message' => 'Task created successfully'],201);
    }

    public function asController(addTaskRequest $request): JsonResponse
    {
        return $this->handle($request->validated());
    }
}
