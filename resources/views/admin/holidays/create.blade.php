@extends('layouts.app')

@section('content')

@include('admin.structure.errors')

  <div class="panel panel-default">

    <div class="panel-heading">
      Check In Form
    </div>

    <div class="panel-body">
      <form action="{{ route('holidays.store')}}" method="post" enctype="multipart/form-data">

        <div class="dropdown">
        <label for="address">Address</label>
        <button class="btn btn-primary dropdown-toggle form-control" type="button" data-toggle="dropdown">Address
<span class="caret"></span></button>
<ul class="dropdown-menu">
  <li><a href="#">HTML</a></li>
  <li><a href="#">CSS</a></li>
  <li><a href="#">JavaScript</a></li>
        </ul>
        </div>

        <div class="dropdown">
        <label for="property_type">Property Type</label>
        <button class="btn btn-primary dropdown-toggle form-control" type="button" data-toggle="dropdown">Property Type
<span class="caret"></span></button>
<ul class="dropdown-menu">
  <li><a href="#">HTML</a></li>
  <li><a href="#">CSS</a></li>
  <li><a href="#">JavaScript</a></li>
        </ul>
        </div>

        <div class="form-group">

          <label for="date">Date</label>
          <input type="date" name="arrival" class="form-control">

        </div>

        <div class="form-group">
          <label for="clerk">Clerk</label>
          <input type="text" name="clerk" class="form-control">
          </div>

          <div class="form-group">
            <label for="agent">Agent</label>
            <input type="text" name="agent" class="form-control">
            </div>

          <div class="form-group">
            <label for="gas_meter">Gas Meter Reading & Location/Image</label>
            <input type="text" name="gas_meter" class="form-control">
            </div>

          <div class="form-group">
            <label for="gas_cert">Gas Meter Certiification</label>
            <input type="text" name="gas_cert" class="form-control">
            </div>

          <div class="form-group">
            <label for="elec_meter">Electric Meter Reading & Location/Image</label>
            <input type="text" name="elec_meter" class="form-control">
            </div>

            <div class="form-group">
              <label for="smoke_detect">Smoke Detectors</label>
              <input type="text" name="smoke_detect" class="form-control">
              </div>

            <div class="form-group">
              <label for="prop_clean">Properties Professionally Cleaned</label>
              <input type="text" name="prop_clean" class="form-control">
              </div>

            <div class="form-group">
              <label for="carpet_clean">Carpets Professionally Cleaned</label>
              <input type="text" name="carpet_clean" class="form-control">
              </div>

            <div class="form-group">
              <label for="keys">Keys</label>
              <input type="text" name="keys" class="form-control">
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
