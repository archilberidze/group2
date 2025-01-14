<?php

namespace App\Actions\task;

use App\Http\Requests\DeleteTaskRequest;
use App\Models\task;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;

class deleteTask extends Action
{
 public function handle(array $data){
     $task = task::find($data['id']);
     $task->delete();
     return response()->json(['message' => 'Task deleted successfully'], 200);
 }

 public function asController(DeleteTaskRequest $request):JsonResponse{
     return $this->handle($request->validated());
 }

}
