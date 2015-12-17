@extends('layouts.master')

@section('content')
<div class='row'>
    <div class='col-lg-8 col-md-8 col-lg-push-2 col-md-push-2'>
        <h3>Upload an Image:</h3>
    </div>
</div>

{!! Form::open(['method'=>'GET', 'action'=>'ImagesController@getConfirm','files'=>'true']) !!}

<div class='row form-group'>
    <div class='col-lg-8 col-md-8 col-lg-push-2 col-md-push-2'>
        {!! Form::file('image') !!}
    </div>
</div>

<div class='row'>

    <div class='form-group'>
        <div class='col-lg-4 col-md-4'>
            {!! Form::label('date', 'Date Taken') !!}
            {!! Form::date('date', \Carbon\Carbon::now()) !!}
        </div> <!-- end col sizing -->
    </div> <!-- end form group -->

    <div class='form-group'>
        <div class='col-lg-4 col-md-4'>
            {!! Form::label('country', 'Country where taken') !!}
            {!! Form::select('country', $countries_for_dropdown); !!}
        </div>
    </div>

    <div class='form-group-4'>
        <div class='col-lg-4 col-md-4'>
            {!! Form::label('tags', 'Select Tags') !!}
            {!! Form::select('tags', array('2015'=>'2015', '2014'=>'2014', '2013'=>'2013', 'india'=>'india'), null); !!}
        </div>
    </div>


</div>  <!-- end row -->






<div class='form-group'>
    {!! Form::label('narrative', 'Narrative') !!}
    {!! Form::textarea('narrative', '') !!}
</div>


{!! Form::submit('Upload') !!}

{!! Form::close() !!}

@include('errors.list')
@stop
