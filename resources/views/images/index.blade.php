@extends('layouts.master')

@section('content')
    <h3>All of them:</h3>

    @foreach($images as $image)
        {{ $image->filename }}<br>
    @endforeach

    <!-- @include('errors.list') -->
@stop
