@extends('layouts.app')

@section('content')

@include('admin.structure.errors')

  <div class="panel panel-default">

    <div class="panel-heading">
      Create Holiday
    </div>

    <div class="panel-body">
      <form action="{{ route('packages.store')}}" method="post" >
        {{ csrf_field() }}

        <div class="form-group">

          <label for="property_type">Property Type</label>
          <input type="text" name="property_type" class="form-control">

          <label for="property_type">Property Type</label>
          <input type="text" name="property_type" class="form-control">

          <label for="house_name">House No/Name</label>
          <input type="text" name="house_name" class="form-control">

          <label for="address_1">Address 1</label>
          <input type="text" name="address_1" class="form-control">

          <label for="address_2">Address 2</label>
          <input type="text" name="address_2" class="form-control">

          <label for="address_3">Address 3</label>
          <input type="text" name="address_3" class="form-control">

          <label for="city">Town/City</label>
          <input type="text" name="city" class="form-control">

          <label for="county">County</label>
          <input type="text" name="county" class="form-control">

          <label for="postcode">Postcode</label>
          <input type="text" name="postcode" class="form-control">

          <label for="country">Country</label>
          <input type="text" name="country" class="form-control">

          <label for="exterior_image">Exterior Image</label>
          <input type="file" name="fileToUpLoad" class="form-control" enctype="multipart/form-data">

          <label for="tenancy_type">Tenancy Type</label>
          <input type="text" name="tenancy_type" class="form-control">

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
