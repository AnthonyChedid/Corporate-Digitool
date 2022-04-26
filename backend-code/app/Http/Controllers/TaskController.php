<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    public function showTasksOfChallenge($challengeId)
        {
              $tasks=Task::where('challenge_id',$challengeId)->get();
              return view('/vendor/voyager/tasks/browse',compact('tasks'));
        }

        public function addTaskToChallenge($challengeId)
        {
              $edit=false;
              return view('/vendor/voyager/tasks/edit-add',compact('edit'));
        }


}
