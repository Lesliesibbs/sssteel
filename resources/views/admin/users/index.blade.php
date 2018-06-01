@extends('layouts.app')

@section('content')
<div class="panel-heading">
  <div class="row">
  <div class="col-md-4 text-left panel-title">User</div>
  <div class="col-md-8 text-right panel-title">Add   <a href="{{route('users.create')}}" class="btn btn-xs btn-info" role="button">+</a>
</div>
</div>
</div>
  <table class="table table-hover">


  <thead>
<tr>

    <th>
      Image
    </th>
    <th>
      Name
    </th>
    <th>
      Permissions
    </th>
    <th>
      Delete
    </th>

</tr>
  </thead>

  <tbody>
@if ($users->count() > 0)

@foreach($users as $user)
<tr>

  <td>

     <img src="{{ asset($user->profile['avatar'])}}" alt="" width="60px" height="60ps" style="border-radius: 50%;">

  </td>
  <td>

    {{$user->name}}

  </td>

  <td>

    @if($user->admin)
    <a href="{{ route('users.not.admin', ['id' => $user->id])}}" class="btn btn-xs btn-danger">Remove Permissions</a>

    @else
    <a href="{{ route('users.admin', ['id' => $user->id])}}" class="btn btn-xs btn-success">Make admin</a>
    @endif

  </td>
  <td>

    Delete
  </td>

</tr>
@endforeach
@else

<tr>
<th colspan="5" style="text-center">
No Users
</th>

</tr>
@endif

  </tbody>

</table>

@endsection
