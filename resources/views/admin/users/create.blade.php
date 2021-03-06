@extends('layouts.app')

@section('content')

@include('admin.structure.errors')

  <div class="panel panel-default">

    <div class="panel-heading">
      Create User
    </div>

    <div class="panel-body">
      <form action="{{ route('users.store')}}" method="post" >
        {{ csrf_field() }}

        <div class="form-group">

          <label for="name">User</label>
          <input type="text" name="name" class="form-control">

        </div>

        <div class="form-group">

          <label for="name">Email</label>
          <input type="email" name="email" class="form-control">

        </div>


        <div class="form-group">
          <div class="text-center">

            <button class="btn btn-success" type="submit">Add User</button>
          </div>

        </div>



      </form>
    </div>


  </div>

@endsection
