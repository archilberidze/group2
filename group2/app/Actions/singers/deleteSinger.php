<?php

namespace App\Actions\singers;

use App\Http\Requests\DeleteSingerRequest;
use App\Models\singers;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class deleteSinger extends Action
{
    public function handle(array $data)
    {
        $singer = singers::find($data['id']);
        $singer->delete();
        return response() -> json(['message'=>'singer deleted'], 200);
    }

    public function asController(DeleteSingerRequest $request): JsonResponse{
        return $this->handle($request->validated());
    }
}
