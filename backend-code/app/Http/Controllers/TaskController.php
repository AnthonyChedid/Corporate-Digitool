<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Competence;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
class TaskController extends VoyagerBaseController
{
    public function showTasksOfChallenge($challengeId)
        {
              $tasks=Task::where('challenge_id',$challengeId)->get();
              $challenge_id=$challengeId;
              return view('/vendor/voyager/tasks/browse',compact('tasks','challenge_id'));
        }

        public function addTaskToChallenge($challengeId)
        {
            $challenge_id=$challengeId;
            $competences=Competence::all();
            return view('addTask',compact('challenge_id','competences'));
        }

        public function submitTaskToChallenge(Request $request,$challengeId)
        {
            $competence_id=$request->competence_id;
            $taskName=$request->taskName;
            $description=$request->description;
            $result=$request->result;
            $challenge_id=$challengeId;

            $newTask=Task::create([
                'competence_id'=>$competence_id,
                'challenge_id'=>$challenge_id,
                'taskName'=>$taskName,
                'description'=>$description,
                'result'=>$result,
            ]);

            return redirect()->route('tasks.showTasks', [$challenge_id]);
        }


}
