<?php

namespace App\Actions\team;

use App\Http\Requests\GetFilterRequest;
use App\Http\Resources\GetTeamsResources;
use App\Models\teams;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class getFilteredTeams extends Action
{
    public function handle(array $data)
    {
        $filteredTeams =  teams::where('championship', $data['championship']) -> get();

        return response()->json(GetTeamsResources::collection($filteredTeams));
    }

    public function asController(GetFilterRequest $request): JsonResponse
    {
        return $this->handle($request->validated());
    }
}
