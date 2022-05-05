<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssignedTask;
use App\Models\Competence;
use App\Models\Challenge;
use App\Models\ChallengeType;
use App\Models\Task;

class AssignedTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getTasks(Request $request)
    {
        $id = $request->id;
        $a=AssignedTask::where('assignedchallenge_id',$id)->get();
        for ($x = 0; $x <count($a); $x++) {
            $id=$a[$x]->task_id;
            $task=Task::where('id',$id)->get();
            $challenge_id=$task[0]->challenge_id;
            $challenge_id=Challenge::where('id',$challenge_id)->get()->first();
            $challenge_id->challenge_document = base64_encode($challenge_id->challenge_document);
            $challenge_type_id=$challenge_id->challenge_type_id;
            $challenge_type_id=ChallengeType::where('id',$challenge_type_id)->get()->first();
            $challenge_id->challenge_type_id=$challenge_type_id;
            $task[0]->challenge_id=$challenge_id;
            $a[$x]->task_id=$task;
        }
        return $a;
    }

    public function getResultTasks(Request $request){
        $id = $request->id;
        $a=AssignedTask::where('assignedchallenge_id',$id)->get();
        for ($x = 0; $x <count($a); $x++) {
            $id=$a[$x]->task_id;
            $challenge=Task::where('id',$id)->get();
            $a[$x]->task_id=$challenge;
        }
        for ($x = 0; $x <count($a); $x++) {
            $id=$a[$x]->task_id;
            $competence=Competence::where('id',$id[0]->competence_id)->get();
            $a[$x]->competence_id=$competence;
        }
        return $a;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function answerTask(Request $request)
    {
        $id=$request->id;
        $score= $request->score;
        $time= $request->time;
        $type= $request->type;
        $fileType= $request->fileType;
        $file=$request->file;


        return AssignedTask::where('id',$id)->update(['task_score' => $score,'completionTime' => $time]);
  

        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
