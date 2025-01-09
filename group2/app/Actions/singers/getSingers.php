<?php

namespace App\Actions\singers;

use App\Http\Resources\GetSingersResourse;
use App\Models\singers;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class getSingers extends Action
{
    public function handle(){
        $singers= singers::all();
        return response()->json(GetSingersResourse::collection($singers));
    }

    public function asController(): JsonResponse
    {
        return $this->handle();
    }

}
