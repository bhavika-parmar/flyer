
@extends('master')
@section('title','FirstPage')
@section('content')


<h1> {{ $flyer->street }} </h1>
<h2> ${{ number_format($flyer->price) }}</h2>
    <div class="description"  style="width: 898px;"> {{ $flyer->des }}</div>

   <br/><br/>

<div class="col-md-9" >

    @foreach($flyer->photos as $photo)

     <div class="col-md-3">
        <form method="POST" action="{{url("photos/".$photo->id)}}">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="Delete">
        <button type="submit">Delete</button>
        </form>
         <a href="http://localhost-bhavika/Demoo/public/images/{{ $photo->path }}" data-lity>
        <img src="http://localhost-bhavika/Demoo/public/images/{{ $photo->path }}" style="width: 220px;"></a>
     </div>
    @endforeach
</div>



<form id="addPhotosForm" action="http://localhost-bhavika/Demoo/public/{{ $flyer->zip }}/{{ $flyer->street }}/photos"
      class="dropzone"
      id="my-awesome-dropzone" style="margin-top: 730px;" method="POST">
    {{ csrf_field() }}

</form>


<h3 style="margin-top: -202px;">Add Your Photos</h3>
   {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css" rel="stylesheet">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>--}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
<script src="https://code.jquery.com/jquery-2.2.1.js"></script>
<script src="{{ url('js/lity.js') }}"></script>
    <script>
           Dropzone.options.addPhotosForm = {
        paramName:'photo',
        maxFilesize: 3,
        acceptedFiles: '.jpeg, .jpg, .png, .bmp'
    };
    </script>


@endsection