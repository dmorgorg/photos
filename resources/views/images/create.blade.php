@extends('layouts.master')

@section('content')
    <h3>Upload an Image:</h3>

    {{-- don't do the usual POST here but get a confirmation to proceed --}}
    {!! Form::open(['method'=>'GET', 'action'=>'ImagesController@getConfirm','files'=>'true']) !!}

    <div class='form-group'>
        {!! Form::file('image') !!}

    </div>


    <div class='form-group'>
        {!! Form::label('date', 'Date Taken') !!}
        {!! Form::date('date', \Carbon\Carbon::now()) !!}
    </div>

    <div class='form-group'>
        {!! Form::label('country', 'Country where taken') !!}
        {!! Form::select('country', ['canada'=>'Canada', 'us'=>'United States'], null); !!}
    </div>

    <div class='form-group'>
        {!! Form::label('tags', 'Select Tags') !!}
        {!! Form::select('tags', array('2015'=>'2015', '2014'=>'2014', '2013'=>'2013', 'india'=>'india'), null); !!}
    </div>

    <div class='form-group'>
        {!! Form::label('narrative', 'Narrative') !!}
        {!! Form::textarea('narrative', '') !!}
    </div>


    {!! Form::submit('Upload') !!}

    {!! Form::close() !!}

    @include('errors.list')
@stop
