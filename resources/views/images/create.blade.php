@extends('layouts.master')

@section('content')


<form method='POST' action='/images/create' enctype="multipart/form-data">

    <input type='hidden' value='{{ csrf_token() }}' name='_token'>

    <div class='container'>
        <div class = 'col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h3>Upload an Image:</h3>
                </div>
            </div>
            <div class='row'>
                <div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
                    <input type='file' id='file_input' name='file_input'>
                </div>
                <div class='col-xs-12 col-sm-6  col-md-6 col-lg-6'>
                    <span  id='rename_or_warn' name='rename_or_warn' ></span>
                </div>
            </div>
            <div class='row'>
                <div class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>
                    <div class='row'>
                        <div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
                            <label for='country_input'>Country Where Taken:</label>
                            <select name='country_input' id='country_input' name='country_input' required >
                                <option selected disabled hidden value=''></option>
                                @foreach($countries_for_dropdown as $country_id => $country_name)
                                <option value='{{ $country_id }}'> {{ $country_name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
                            <label for='date_input'>Date When Taken:</label>
                            <input type='date' name='date_input' id='date_input'>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-lg-12'>
                            <span id='tag_list' name='tag_list' ></span>
                        </div>
                    </div>
                </div>
                <div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'>
                    <label for='tag_input'>Select Tags (Ctrl + click):</label>
                    <select name='tag_input' id='tag_input' size='7' multiple required>
                        @foreach($tags_for_dropdown as $tag_id => $tag_name)
                        <option value='{{ $tag_id }}'> {{ $tag_name }} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class='row'>
                <div class='col-lg-12'>
                    <label for='caption_input'>Caption: </label>
                    <input type='text' id='caption_input' name='caption_input'>
                </div>
            </div>
            <div class='row'>
                <div class='col-lg-12'>
                    <div class='vspace1em'></div>
                    <input type='submit' id='submit' value='Upload'>
                </div>
            </div>
            <input type='hidden' id='rename' name='rename' value=''>
        </div>
    </div>
</form>

@include('errors.list')
@stop
