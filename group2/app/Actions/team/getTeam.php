<?php

namespace App\Actions\team;


use App\Http\Requests\GetTaskRequest;
use App\Http\Resources\GetTeamsResources;
use App\Models\teams;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class getTeam extends  Action
{
    public function handle(array $data)
    {
        $team = teams::find($data['id']);
        return response()->json(new GetTeamsResources($team));
    }

    public function asController(GetTaskRequest $request): JsonResponse
    {
        return $this->handle($request->validated());
    }
}
