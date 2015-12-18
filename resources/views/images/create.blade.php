@extends('layouts.master')

@section('content')

{!! Form::open(['method'=>'POST', 'action'=>'ImagesController@postCreate','files'=>'true']) !!}

<div class='row upload'>
    <div class='col-lg-8 col-md-8 col-lg-push-2 col-md-push-2'>
        <div class='row'>
            <div class='col-md-6 col-lg-6'>
                <h2>Upload an Image:</h2>
            </div>
        </div>


        <div class='row'>
            <div class='col-md-6 col-lg-6'>
                {!! Form::file('image') !!}
            </div>
        </div>

        <div class='row'>
            <div class='col-md-3 col-lg-3'>
                {!! Form::label('date', 'Date Taken') !!}
                {!! Form::date('date', \Carbon\Carbon::now()) !!}
            </div>


            <div class='col-md-3 col-lg-3 col-md-push-1 col-large-push-1'>
                {!! Form::label('country', 'Country where taken') !!}
                {!! Form::select('country', $countries_for_dropdown); !!}
            </div>

            <div class='col-md-3 col-lg-3 col-md-push-2 col-large-push-2'>
                {!! Form::label('tags', 'Select Tags') !!}
                {!! Form::select('tags', array('2015'=>'2015', '2014'=>'2014', '2013'=>'2013', 'india'=>'india'), null); !!}
            </div>

        </div>

        <div class='row'>
            <div class='col-md-11 col-lg-11'>
                {!! Form::label('title', 'Title or Caption') !!}
                {!! Form::text('title' ) !!}
            </div>
        </div>

        <div class='row'>
            <div class='col-md-11 col-lg-11'>
                {!! Form::label('narrative', 'Narrative') !!}
                {!! Form::textarea('narrative' ) !!}
            </div>
        </div>

        <div class="row form-group">
            <div class='col-md-11 col-lg-11 '>
                {!! Form::submit('Upload') !!}
            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}












@include('errors.list')
@stop
