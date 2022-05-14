<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Competence;
use App\Models\AssignedTask;
use App\Models\AssignedChallenge;
use App\Models\Challenge;
use App\Models\ChallengeType;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
class TaskController extends VoyagerBaseController
{
    public function showTasksOfChallenge($challengeId)
        {
              $tasks=Task::where('challenge_id',$challengeId)->get();
              $challenge_id=$challengeId;
              $bestScores=array();
              for ($x = 0; $x <count($tasks); $x++) {
                  $assignedTask=AssignedTask::where('task_id',$tasks[$x]->id)->get();
                  $bestTime=0;
                  for ($y = 0; $y <count($assignedTask); $y++) {
                        if($assignedTask[$y]->completionTime > $bestTime){
                            $bestTime=$assignedTask[$y]->completionTime;
                        }
                  }
                  $bestScores[$tasks[$x]->taskName]=$bestTime;

              }

              return view('/vendor/voyager/tasks/browse',compact('tasks','challenge_id','bestScores'));
        }

        public function addTaskToChallenge($challengeId)
        {
            $challenge_id=$challengeId;
            $challenge=Challenge::where('id',$challenge_id)->get()->first();
            $challengeTypeId=$challenge->challenge_type_id;
            $challengeType=ChallengeType::where('id',$challengeTypeId)->get()->first();
            $challengeTypeName=$challengeType->typeName;
            $competences=Competence::all();
             return view('addTask',compact('challenge_id','competences','challengeTypeName'));
        }

        public function submitTaskToChallenge(Request $request,$challengeId)
        {
            $competence_id=$request->competence_id;
            $taskName=$request->taskName;
            $description=$request->description;
            $result=$request->result;
            $challenge_id=$challengeId;
            $base64=null;
            if($request->hasFile('result_document')){
                 $path = $request->file('result_document')->getRealPath();
                 $content = file_get_contents($path);
                 $base64 = base64_encode($content);
            }

            $newTask=Task::create([
                'competence_id'=>$competence_id,
                'challenge_id'=>$challenge_id,
                'taskName'=>$taskName,
                'description'=>$description,
                'result'=>$result,
                
            ]);
            Task::where('id',$newTask->id)->update(['result_document'=>$base64]);

            return redirect()->route('tasks.showTasks', [$challenge_id]);

        }

        public function deleteTask($taskId){
            //delete assigned task
            $correspondingAssignedTask=AssignedTask::where ('task_id',$taskId)->get();
            if($correspondingAssignedTask){
                for ($x = 0; $x <count($correspondingAssignedTask); $x++) {
                   $correspondingAssignedTask[$x]->delete();
                }
            }

            //delete the task
            $correspondingTask=Task::find($taskId);
            $correspondingTask->delete();
            return redirect()->back();


        }

}
