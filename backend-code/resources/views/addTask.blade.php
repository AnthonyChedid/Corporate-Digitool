@extends('voyager::master')

@section('page_header')
    <h1 class="page-title">
        Add a task
    </h1>
    @include('voyager::multilingual.language-selector')
@stop


@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">

                    {!!Form::open(['route'=>['tasks.submitTask',$challenge_id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
                   <div class="form-group">
                       {{Form::label('competence','Competence')}}
                       {{Form::select('competence_id',$competences->pluck('competenceName','id'))}}
                   </div>
                   <div class="form-group">
                       {{Form::label('taskName','Task Name')}}
                       {{Form::text('taskName')}}
                   </div>
                   <div class="form-group">
                       {{Form::label('description','Description')}}
                       {{Form::text('description')}}

                   </div>
                    @if($challengeTypeId==2)
                   <div class="form-group">
                       {{Form::label('result_document','Result Document')}}
                       {{Form::file('result_document')}}
                   </div>
                   @endif

                  @if($challengeTypeId==1)
                   <div class="form-group">
                      {{Form::label('result','Result')}}
                      {{Form::text('result')}}
                  </div>
                   @endif

                   <div>
                       {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                   </div>
                {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>

@stop
