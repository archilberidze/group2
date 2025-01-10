<?php

namespace App\Actions\team;

use App\Http\Resources\GetTeamsResources;
use App\Models\teams;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class getTeams extends  Action
{
    public function handle()
    {
        $teams = teams::all();


       return response()->json(GetTeamsResources::collection($teams));
    }

    public function asController(): JsonResponse
    {
        return $this->handle();
    }

}
