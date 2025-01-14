<?php

namespace app\Actions\team;

use App\Http\Requests\teamNameRequest;
use App\Http\Resources\GetTeamsResources;
use App\Models\teams;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class getTeamName extends Action
{
 public function handle(array $data)
 {
     $name = $data['name'];
     $teams = teams::teamNameLike($name)->get();
     return response()->json(GetTeamsResources::collection($teams));
 }

 public function asController(teamNameRequest $request):JsonResponse
 {
     return $this->handle($request->validated());
 }



}
