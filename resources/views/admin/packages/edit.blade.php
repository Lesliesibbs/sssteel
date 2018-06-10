
@extends('layouts.app')

@section('content')

@include('admin.structure.errors')

  <div class="panel panel-default">

    <div class="panel-heading">
      Edit {{$packages->address_1 }}
    </div>

    <div class="panel-body">
      <form action="{{ route('packages.update', ['id' =>$packages->id])}}" method="post" >
        {{ csrf_field() }}

        <div class="form-group">

          <label for="property_type">Poperty Type</label>
          <input type="text" name="property_type" value="{{$packages->property_type}}" class="form-control">

          <label for="house_name">House No/Name</label>
          <input type="text" name="house_name" value="{{$packages->house_name}}" class="form-control">

          <label for="address_2">Address 1</label>
          <input type="text" name="address_1" value="{{$packages->address_1}}" class="form-control">

          <label for="address_2">Address 2</label>
          <input type="text" name="address_2" value="{{$packages->address_2}}" class="form-control">

          <label for="address_3">Address 3</label>
          <input type="text" name="address_3" value="{{$packages->address_3}}" class="form-control">

          <label for="city">City</label>
          <input type="text" name="city" value="{{$packages->city}}" class="form-control">

          <label for="county">County</label>
          <input type="text" name="county" value="{{$packages->county}}" class="form-control">

          <label for="postcode">Postcode</label>
          <input type="text" name="postcode" value="{{$packages->postcode}}" class="form-control">

          <label for="country">Country</label>
          <input type="text" name="country" value="{{$packages->country}}" class="form-control">

          <label for="exterior_image">Exterior Image</label>
          <input type="file" name="fileToUpLoad" class="form-control" enctype="multipart/form-data">

          <label for="tenancy_type">Tenancy Type</label>
          <input type="text" name="tenancy_type" value="{{$packages->tenancy_type}}" class="form-control">

        </div>


        <div class="form-group">
          <div class="text-center">

            <button class="btn btn-success" type="submit">Update</button>
          </div>

        </div>



      </form>
    </div>


  </div>

@endsection
