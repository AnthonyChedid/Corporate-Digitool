@extends('voyager::master')


@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
          <p>List of tasks</p>
        </h1>
          <button id='add_task' onClick="window.location='/admin/tasks/create/{{$challenge_id}}'" method="POST">Add A Task</button>

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
                                         <td>{{$bestScores[$task->taskName]}} seconds</td>
                                          <td>
                                            <button onclick="window.location='/admin/tasks/delete/{{$task->id}}'">Delete Task</button>
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
