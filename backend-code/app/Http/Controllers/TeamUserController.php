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
        team_user::create([
            'team_id'=>$request->team;
            'user_id'=>$request->user;
        ]);
    }
}
