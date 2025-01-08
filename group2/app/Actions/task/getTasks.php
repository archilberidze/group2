<?php

namespace App\Actions\task;

use App\Http\Requests\addTaskRequest;
use App\Http\Resources\GetTasksResource;
use App\Models\task;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class getTasks extends Action
{

    public function handle()
    {
        $tasks = task::all();
        return response()->json(GetTasksResource::collection($tasks));
    }

    public function asController(): JsonResponse
    {
        return $this->handle();
    }
}
