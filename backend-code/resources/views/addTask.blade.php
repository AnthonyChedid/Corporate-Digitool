@extends('voyager::master')

@section('page_header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h1 class="page-title">
        <i class="fa fa-list" style="font-size:34px;"></i>
        Add a task
    </h1>
    @include('voyager::multilingual.language-selector')
@stop


@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered" style="padding:25px">

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
                    @if($challengeTypeName=="Creation")
                   <div class="form-group">
                       {{Form::label('result_document','Result Document')}}
                       {{Form::file('result_document')}}
                   </div>
                   @endif

                  @if($challengeTypeName=='Research')
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
