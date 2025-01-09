<?php

namespace App\Actions\singers;

use App\Http\Resources\GetSingersResourse;
use App\Models\singers;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;


class getOldestSinger extends Action
{
    public function handle()
    {
        $singer = singers::orderBy('age', 'desc')
            ->first();

        return response()->json(new GetSingersResourse($singer));

    }

    public function asController(): JsonResponse
    {
        return $this->handle();
    }
}
