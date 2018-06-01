@extends('layouts.app')

@section('content')

@include('admin.structure.errors')

  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="row">
      <div class="col-md-4 text-left panel-title">Edit Properties : {{ $holidays->title }}</div>
      <div class="col-md-8 text-right panel-title">Add   <a href="{{route('packages.create')}}" class="btn btn-xs btn-info" role="button">+</a>
    </div>
    </div>
    </div>


    <div class="panel-body">
      <form action="{{ route('holidays.update', ['id' => $holidays->id])}}" method="post" enctype="multipart/form-data">

        <div class="form-group">

          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" value="{{ $holidays->title }}">

        </div>

        <div class="form-group">

          <label for="description">Description</label>
          <textarea id="description" rows="10"  cols="30" name="description" class="form-control">{{ $holidays->description }}</textarea>

        </div>

        <div class="form-group">

          <label for="packages">Select Package</label>
          <select name="packages_id" id="packages" class="form-control">
              @foreach($packagies as $packages)
              <option value="{{ $packages->id }}">{{$packages->name}}</option>
              @endforeach
          </select>
        </div>
        <div class="form-group">

          <label for="city">City</label>
          <input type="text" name="city" class="form-control" value="{{ $holidays->city }}">

        </div>
        <div class="form-group">

          <label for="country">Country</label>
          <input type="text" name="country" class="form-control" value="{{ $holidays->country }}">

        </div>

        <div class="form-group">
                  {{ csrf_field() }}

          <label for="duration">Duration</label>
          <input type="text" name="duration" class="form-control" value="{{ $holidays->duration }}">

        </div>

        <div class="form-group">

          <label for="arrival">Arrival</label>
          <input type="date" name="arrival" class="form-control" value="{{ $holidays->arrival_date }}">

        </div>

        <div class="form-group">

          <label for="departure">Departure</label>
          <input type="date" name="departure" class="form-control" value="{{ $holidays->departure_date }}">

        </div>
        <div class="form-group">

          <label for="gallery">Photo Gallery</label>
          <input type="file" name="gallery" class="form-control" multiple>

        </div>

        <div class="form-group">
          <div class="text-center">

            <button class="btn btn-success" type="submit">Submit</button>
          </div>

        </div>

      </form>
    </div>


  </div>

@endsection
