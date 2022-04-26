<?php

namespace App\Http\Controllers;
use App\Models\AssignedChallenge;
use App\Models\Challenge;

use Illuminate\Http\Request;

class AssignedChallengeController extends TCG\Voyager\Http\Controllers\VoyagerBaseController
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
            $a[$x]->challenge_id=$challenge;
        }
        return $a;
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
            $a[$x]->challenge_id=$challenge;
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
    public function finishChallenge(Request $request)
    {
        $id = $request->id;
        AssignedChallenge::where('id',$id)->update(['isFinished' => true]);

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

    public function assignUserToChallenge(Request $request){

        }
}
