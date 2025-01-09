<?php

namespace App\Actions\team;

use App\Http\Requests\teamNameRequest;
use App\Http\Resources\GetTeamsResources;
use App\Models\teams;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class updateTeam extends Action
{
    public function handle($id, array $data){
        $team = teams::find($id);
        if (!$team) {
            return response()->json(['error' => 'Team not found'], 404);
        }
        $team -> update($data);
        return response()->json(new GetTeamsResources($team));
    }

    public function asController(int $id, teamNameRequest $request): JsonResponse {
        return $this -> handle($id, $request -> validated());
    }
}
