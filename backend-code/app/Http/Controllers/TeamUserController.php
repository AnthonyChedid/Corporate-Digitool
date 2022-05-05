<?php

namespace App\Http\Controllers;
use App\Models\AssignedChallenge;
use App\Models\Challenge;
use App\Models\ChallengeType;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

use App\Models\team_user;

use Illuminate\Http\Request;

class TeamUserController extends VoyagerBaseController
{
    public function addTeamMember(Request $request){
        $teamMember=team_user::where('team_id',$request->team)
                    ->where('user_id',$request->user)->first();

        if(!$teamMember){team_user::create([
            'team_id'=>$request->team,
            'user_id'=>$request->user,
        ]);}

        return redirect()->back();

    }
}
