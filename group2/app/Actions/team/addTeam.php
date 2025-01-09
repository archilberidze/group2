<?php

namespace App\Actions\team;

use App\Http\Requests\addTeamRequest;
use App\Models\teams;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;


class addTeam extends Action
{

    public function handle(array $data){

        $team = new teams();
        $team -> name = $data['name'];
        $team -> championship = $data['championship'];
        $team -> save();

        return  response()->json(['message' => 'Team created successfully'],201);

    }

    public function asController(addTeamRequest $request):JsonResponse {
        return $this ->handle($request ->validated());
    }
}
