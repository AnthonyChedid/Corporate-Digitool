@extends('voyager::master')


@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
          <p>List of Users Assigned</p>
        </h1>
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

                                        <th>Username</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($correspondingUsers as $user)
                                    <tr>
                                         <td>{{$user->name}}</td>
                                         <td>{{$user->email}}</td>
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
