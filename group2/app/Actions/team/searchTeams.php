<?php

namespace App\Actions\team;

use App\Http\Requests\teamNameRequest;
use App\Http\Resources\GetTeamsResources;
use App\Models\teams;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class searchTeams extends Action
{
    public function handle(array $data){
        $name = $data['name'] ?? null;
        $championship = $data['championship'] ?? null;

        $query = teams::query();
        if($name){
            $query-> NameLike($name);
        }
        if($championship){
            $query -> ChampionshipLike($championship);
        }

        return response () -> json(GetTeamsResources::collection($query -> get()) , 201);
    }

    public function asController(teamNameRequest $request): JsonResponse {
        return $this -> handle($request -> validated());
    }
}
