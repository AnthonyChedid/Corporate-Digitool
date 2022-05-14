<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Events\BreadDataRestored;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Events\BreadImagesDeleted;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;

use App\Models\competence_user;
use App\Models\Competence;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class CompetenceUserController extends VoyagerBaseController
{
    public function showCorrespondingCompetences($userId){
        $successfulCompetences=competence_user::where('user_id',$userId)->where('isSuccessful',true)->get();
        $unsuccessfulCompetences=competence_user::where('user_id',$userId)->where('isSuccessful',false)->get();

        //get infos of Successful Competences
        $infoOfSuccessfulCompetences=array();
        for ($x = 0; $x <count($successfulCompetences); $x++) {
            $infos=Competence::where('id',$successfulCompetences[$x]->competence_id)->get()->first();
            $competenceName=$infos->competenceName;
            if(!array_key_exists($competenceName,$infoOfSuccessfulCompetences)){
                $infoOfSuccessfulCompetences[$competenceName]=1;
            }
            else{
                $infoOfSuccessfulCompetences[$competenceName]+=1;
            }
        }

        //get infos of Unsuccessful Competences
       $infoOfUnsuccessfulCompetences=array();
       for ($x = 0; $x <count($unsuccessfulCompetences); $x++) {
           $infos=Competence::where('id',$unsuccessfulCompetences[$x]->competence_id)->get()->first();
           $competenceName=$infos->competenceName;
           if(!array_key_exists($competenceName,$infoOfUnsuccessfulCompetences)){
               $infoOfUnsuccessfulCompetences[$competenceName]=1;
           }
           else{
               $infoOfUnsuccessfulCompetences[$competenceName]+=1;
           }
       }

        return view('showCorrespondingCompetences',compact('infoOfSuccessfulCompetences','infoOfUnsuccessfulCompetences'));
    }
}
