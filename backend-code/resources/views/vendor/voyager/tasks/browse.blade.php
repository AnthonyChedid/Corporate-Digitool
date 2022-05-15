@extends('voyager::master')


@section('page_header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="container-fluid">
        <h1 class="page-title">
          <p>List of tasks</p>
        </h1>
          <button id='add_task' onClick="window.location='/admin/tasks/create/{{$challenge_id}}'" method="POST" style="background-color: #4CAF73; border: none;color: white;padding: 7px 15px;text-align: center;text-decoration: none;display: inline-block;border-radius: 4px; "><i class="fa fa-plus"></i>  Add A Task</button>

    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                    <tr>

                                        <th>Task Name</th>
                                        <th>Description</th>
                                        <th>Best Completion Time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tasks as $task)
                                    <tr>
                                         <td>{{$task->taskName}}</td>
                                         <td>{{$task->description}}</td>
                                         <td>@if($bestScores[$task->taskName]!=0){{$bestScores[$task->taskName]}} seconds @endif</td>
                                          <td>
                                            <button onclick="window.location='/admin/tasks/delete/{{$task->id}}'" style="background-color: #fa2a00; border: none;color: white;text-align: center;padding:3px;text-decoration: none;display: inline-block;border-radius: 4px; "><i class="fa fa-trash"></i>  Delete Task</button>
                                          </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                     </div>
                </div>
             </div>
        </div>
    </div>
@stop
