<?php

namespace App\Http\Controllers;
use App\Models\AssignedChallenge;
use App\Models\Challenge;
use App\Models\ChallengeType;
use App\Models\DocumentType;
use App\Models\AssignedTask;
use App\Models\Task;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

use Illuminate\Http\Request;

class AssignedChallengeController extends VoyagerBaseController
{
    /**
     * get asssigned challenges for userid
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getNewChallenges(Request $request)
    {
        $id = $request->id;
        $a=AssignedChallenge::where('user_id',$id)->where('isFinished',false)->get();
        for ($x = 0; $x <count($a); $x++) {
            $id=$a[$x]->challenge_id;

            $challenge=Challenge::where('id',$id)->get();
            $type=$challenge[0]->challenge_type_id;
            $type=ChallengeType::where('id',$type)->get()->first();
            $challenge[0]->challenge_document = base64_encode($challenge[0]->challenge_document);
            $challenge[0]->challenge_type_id=$type;
            $doc_type=$challenge[0]->document_type_id;
            $doc_type=DocumentType::where('id',$doc_type)->get()->first();
            $challenge[0]->document_type_id=$doc_type;
            $a[$x]->challenge_id=$challenge;
        }
         return $a;
    }

    /**
     * get asssigned challenges for userid
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getOldChallenges(Request $request)
    {
        $id = $request->id;
        $a=AssignedChallenge::where('user_id',$id)->where('isFinished',true)->get();
        for ($x = 0; $x <count($a); $x++) {
            $id=$a[$x]->challenge_id;

            $challenge=Challenge::where('id',$id)->get();
            $type=$challenge[0]->challenge_type_id;
            $type=ChallengeType::where('id',$type)->get()->first();
            $challenge[0]->challenge_document = base64_encode($challenge[0]->challenge_document);
            $challenge[0]->challenge_type_id=$type;
            $a[$x]->challenge_id=$challenge;
        }
         echo $a;
    }




    /**
     * get asssigned challenges for userid
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getPreviousChallenges(Request $request)
    {
        $id = $request->id;
        $a=AssignedChallenge::where('user_id',$id)->where('isFinished',true)->get();
        for ($x = 0; $x <count($a); $x++) {
            $id=$a[$x]->challenge_id;

            $challenge=Challenge::where('id',$id)->get();
            $type=$challenge[0]->challenge_type_id;
            $type=ChallengeType::where('id',$type)->get()->first();
            $challenge[0]->challenge_document = base64_encode($challenge[0]->challenge_document);
            $challenge[0]->challenge_type_id=$type;
            $a[$x]->challenge_id=$challenge;
        }
         return $a;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function finishChallenge(Request $request)
    {
        $id = $request->id;
        AssignedChallenge::where('id',$id)->update(['isFinished' => true]);

    }


    public function assignUserToChallenge(Request $request){
        $assignedChallenge=AssignedChallenge::where('user_id',$request->user)
                    ->where('challenge_id',$request->challenge)->first();

        if(!$assignedChallenge){
            //Create a new assigned Challenge
             $assignedChallenge = AssignedChallenge::create([
                 'challenge_id'=>$request->challenge,
                 'user_id'=>$request->user,
                 'isFinished'=>false,
             ]);

             //find the tasks to the corresponding challenge
             $correspondingTask=Task::where ('challenge_id',$request->challenge)->get();

            //Create new assigned Tasks
            for ($x = 0; $x <count($correspondingTask); $x++) {
                $correspondingAssignedTask=AssignedTask::create([
                        'task_id'=>$correspondingTask[$x]->id,
                        'assignedchallenge_id'=>$assignedChallenge->id,
                    ]);

            }


        }

        return redirect()->back();


        }
}
