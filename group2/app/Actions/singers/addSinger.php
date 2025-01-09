<?php

namespace App\Actions\singers;

use App\Http\Requests\addSingerRequest;
use App\Models\singers;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class addSinger extends Action
{
    public function handle(array $data){
        $singer = new singers();
        $singer->name= $data['name'];
        $singer->age= $data['age'];
        $singer->save();

        return response() -> json(['message'=>'singer added'], 201);
    }

    public function asController(addSingerRequest $request): JsonResponse
    {
        return $this -> handle($request ->validated());
    }
}
