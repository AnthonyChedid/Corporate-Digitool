<?php

namespace App\Http\Controllers;
use App\Models\AssignedChallenge;
use App\Models\Challenge;
use App\Models\ChallengeType;
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

        }
}
