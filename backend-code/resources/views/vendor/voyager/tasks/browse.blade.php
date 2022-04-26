@extends('voyager::master')


@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
          <p>Tasks of Challenges {{$tasks[0]->challenge_id}}</p>
        </h1>
          <button id='add_task' onClick="window.location='/admin/tasks/create'">Add A Task</button>

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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tasks as $task)
                                    <tr>
                                         <td>{{$task->taskName}}</td>
                                         <td>{{$task->description}}</td>
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
