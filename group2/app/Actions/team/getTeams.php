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
        try {
            $teams = teams::all();
            return response()->json(GetTeamsResources::collection($teams));
        }catch (\Exception){
            return response()->json(['message' => 'server error'], 500);
        }

    }

    public function asController(): JsonResponse
    {
        return $this->handle();
    }

}
