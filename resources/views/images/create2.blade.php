@extends('layouts.master')

@section('content')

{!! Form::open(['method'=>'POST', 'action'=>'ImagesController@postCreate','files'=>'true']) !!}

<div class='row'>
    <div class='col-lg-8 col-md-8 col-lg-push-2 col-md-push-2'>
        <h3>Upload an Image:</h3>
    </div>
</div>

<div class='row'>
    <div class='col-lg-8 col-md-8 col-lg-push-2 col-md-push-2'>
        <div class='row border'>
            <div class='col-lg-5 col-md-5'>
                {!! Form::file('image') !!}
            </div>
            <div class='col-lg-5 col-md-5 col-lg-push-2 col-md-push-2'>
                {!! Form::label('date', 'Date Taken') !!}
                {!! Form::date('date', \Carbon\Carbon::now()) !!}
            </div>



        </div>
    </div>
</div>


<div class='container'>
    <div class='col-lg-8 col-md-8 col-lg-push-2 col-md-push-2'>
        <div class='row border'>
            <div class='form-group'>
                <div class='col-lg-6 col-md-6'>
                    {!! Form::file('image') !!}
                </div>
            </div>
            <div class='form-group'>
                <div class='col-lg-6 col-md-6'>
                    {!! Form::label('date', 'Date Taken') !!}
                    {!! Form::date('date', \Carbon\Carbon::now()) !!}
                </div> <!-- end col sizing -->
            </div>

            <div class='form-group'>
                <div class='col-lg-4 col-md-4'>
                    {!! Form::label('tags', 'Select Tags') !!}
                    {!! Form::select('tags', array('2015'=>'2015', '2014'=>'2014', '2013'=>'2013', 'india'=>'india'), null); !!}
                </div>
            </div>
        </div> <!-- end row -->


        <div class="row form-group">
            {!! Form::submit('Upload') !!}
        </div>
    </div>

</div>  <!-- end row -->






</div>

</div>  <!-- end row -->
{!! Form::close() !!}












@include('errors.list')
@stop
