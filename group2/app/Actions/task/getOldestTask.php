<?php

namespace App\Actions\task;

use App\Http\Resources\GetTasksResource;
use App\Models\task;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class getOldestTask extends Action
{
    public function handle()
    {
        $oldestTask = task::oldest('created_at')->first();

        return response()->json(new GetTasksResource($oldestTask));
    }

    public function asController(): JsonResponse
    {
        return $this->handle();
    }

}
