@extends('master')
@section('title','Form Create')
@section('content')



    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
          adsfdtgfgfh
          fddgfhh  sfdf
    <h1 style="margin-left: 489px;">Form Page</h1>
    <form action="http://localhost-bhavika/Demoo/public/store " method="POST" enctype="multipart/form-data">

        {{ csrf_field() }}
        <div class="form-group">
            <label for="street" style="margin-left: 298px;">Street</label>
            <input type="text" style="margin-left: 295px; width: 521px;" class="form-control" name="street" id="street" placeholder="Enter street" value="{{ old('street') }}">
        </div>
        <div class="form-group">
            <label for="city" style="margin-left: 298px;">City</label>
            <input type="text"style="margin-left: 295px; width: 521px;"  class="form-control" name="city" id="city" placeholder="Enter city" value="{{ old('city') }}">
        </div>
        <div class="form-group">
            <label for="zip" style="margin-left: 298px;">Zip code</label>
            <input type="text" style="margin-left: 295px; width: 521px;" class="form-control" name="zip" id="zip" placeholder="Enter zip" value="{{ old('zip') }}">
        </div>

        <div class="form-group">
            <label for="country" style="margin-left: 298px;">Country</label>
            <select class="form-control"style="margin-left: 295px; width: 521px;"  name="con" id="con"  value="{{ old('con') }}">
                <option>India</option>
                <option>Japan</option>
                <option>Australia</option>
                <option>Brazil</option>
                <option>Tokyo</option>
            </select>
        </div>

    <div class="form-group">
        <label for="state" style="margin-left: 298px;">State</label>
        <input type="text"style="margin-left: 295px; width: 521px;"  class="form-control" name="state" id="state" placeholder="Enter State" value="{{ old('state') }}">
    </div>
        <div class="form-group">
            <label for="price" style="margin-left: 298px;">Price</label>
            <input type="text" style="margin-left: 295px; width: 521px;" class="form-control" name="price" id="price" placeholder="Enter Price" value="{{ old('price') }}">
        </div>
        <div class="form-group">
            <label for="name" style="margin-left: 298px;">Home Description</label>
            <textarea class="form-control" style="margin-left: 295px; width: 521px;" id="des" name="des" rows="4" required> {{ old('des') }}</textarea>
        </div>
       {{--<div class="form-group">
            <label for="photos" style="margin-left: 298px;">Photos</label>
            <input type="file" style="margin-left: 295px; width: 521px;" class="form-control-file" name="photos" id="photos">
        </div>--}}


        <button type="submit" style="margin-left: 291px;" class="btn btn-primary">Create Flyer</button>
    </form>
@endsection