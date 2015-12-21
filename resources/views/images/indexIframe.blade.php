@foreach($images as $image)
    <div class='col-xs-6 col-sm-4 col-md-3'>

        <a href='/images/med/{{ $image->filename }}' class='thumbnail center-block popup' title='{{$image->caption}}'>
            <img src='/images/thumbs/{{ $image->filename }}' >
        </a>

    </div>
@endforeach
