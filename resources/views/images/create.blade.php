@extends('layouts.master')

@section('content')


{!! Form::open(['method'=>'POST', 'action'=>'ImagesController@postCreate','files'=>'true']) !!}
<div class='container'>
    <div class = 'col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2'>
        <div class='row'>
            <div class='col-lg-12'>
                <h3>Upload an Image:</h3>
            </div>
        </div>
        <div class='row'>
            <div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
                <input type='file' id='fileInput'>
            </div>
            <div class='col-xs-12 col-sm-6  col-md-6 col-lg-6' id="renameOrWarn">

            </div>
        </div>
        <div class='row'>
            <div class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>
                <div class='row'>
                    <div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
                        <label for='country'>Country Where Taken:</label>
                        <select name='country' id='country' required >
                            <option selected disabled hidden value=''></option>
                            @foreach($countries_for_dropdown as $country_id => $country_name)
                            <option value='{{ $country_id }}'> {{ $country_name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
                        <label for='date-taken'>Date When Taken:</label>
                        <input type='date' name='date-taken' id='dateTaken'>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-lg-12' id='tagged'>
                        <span style="color:black;">Tags: </span>
                    </div>
                </div>
            </div>
            <div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'>
                <label for='tags'>Select Tags (Ctrl + click):</label>
                <select name='tags' id='tagging' size='7' multiple required>
                    @foreach($tags_for_dropdown as $tag_id => $tag_name)
                    <option value='{{ $tag_id }}'> {{ $tag_name }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class='row'>
            <div class='col-lg-12'>
                <label for='captionInput'>Caption: </label>
                <input type='text' id='captionInput'>
            </div>
        </div>
        <div class='row'>
            <div class='col-lg-12'>
                <div class='vspace1em'></div>
                <input type='submit' id='submit' value='Upload'>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

@include('errors.list')
@stop
