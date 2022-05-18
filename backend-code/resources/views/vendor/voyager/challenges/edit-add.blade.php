@extends('voyager::master')

@section('page_header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <h1 class="page-title">
            <i class="fa fa-list" style="font-size:34px;"></i>

        Add a Challenge
    </h1>
    @include('voyager::multilingual.language-selector')
@stop


@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered" style="padding:25px">

                    {!!Form::open(['route'=>['challenges.submitChallenge'],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
                   <div class="form-group">
                       {{Form::label('challenge_name','Challenge Name')}}
                        {{Form::text('challenge_name')}}
                   </div>
                   <div class="form-group">
                       {{Form::label('challenge_document','Challenge Document')}}
                       {{Form::file('challenge_document')}}
                   </div>
                   <div class="form-group">
                       {{Form::label('document_type','Challenge Document Type')}}
                      {{Form::select('document_type_id',$documentTypes->pluck('typeName','id'))}}
                   </div>
                   <div class="form-group">
                      {{Form::label('challenge_type','Challenge Type')}}
                     {{Form::select('challenge_type_id',$challengeTypes->pluck('typeName','id'))}}
                   </div>
                   <div>
                       {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                   </div>
                {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>

@stop
