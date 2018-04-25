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

          <label for="name">Name</label>
          <input type="text" name="name" class="form-control">

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
