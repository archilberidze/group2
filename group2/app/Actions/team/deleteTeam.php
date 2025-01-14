<?php

namespace App\Actions\team;

use App\Http\Requests\DeleteTeamRequest;
use App\Models\teams;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class deleteTeam extends Action
{
    public function handle(array $data)
    {
        $team = teams::find($data['id']);
        $team->delete();
        return response() -> json(['message'=>'team deleted'], 200);
    }

    public function asController(DeleteTeamRequest $request): JsonResponse{
        return $this->handle($request->validated());
    }

}
