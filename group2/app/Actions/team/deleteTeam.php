<?php

namespace App\Actions\team;

use App\Http\Requests\GetTeamRequest;
use App\Http\Requests\DeleteTeamRequest;
use App\Models\teams;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class deleteTeam extends Action
{
    public function handle(int $id): JsonResponse{
        $team = teams::find($id);
        if (!$team) {
            return response()->json(['error' => 'Team not found'], 404);
        }
        $team->delete();
        return response()->json(['message' => 'Team record deleted successfully'],200);
    }

    public function asController(int $id): JsonResponse {
        return $this->handle($id);
    }
}
