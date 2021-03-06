@extends('voyager::master')


@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
          <p>List of Competences</p>
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

                                        <th>Mastered Competences</th>
                                        <th>Competences to improve</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                         <td>

                                            @foreach($infoOfSuccessfulCompetences as $successfulCompetenceName=>$nbOfSuccTimes)
                                                <p>{{$successfulCompetenceName}} <i>{{$nbOfSuccTimes}} Tasks</i></p>
                                            @endforeach
                                         </td>
                                          <td>
                                            @foreach($infoOfUnsuccessfulCompetences as $unsuccessfulCompetenceName=>$nbOfUnsuccTimes)
                                                <p>{{$unsuccessfulCompetenceName}} <i>{{$nbOfUnsuccTimes}} Tasks</i> </p>
                                            @endforeach
                                         </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                     </div>
                </div>
             </div>
        </div>
    </div>
@stop
