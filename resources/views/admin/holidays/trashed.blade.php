@extends('layouts.app')

@section('content')
<div class="panel-heading">
  Categories
</div>
  <table class="table table-hover">


  <thead>
<tr>

    <th>
      Title
    </th>
    <th>
      Packages
    </th>
    <th>
      Description
    </th>
    <th>
      City
    </th>
    <th>
      Country
    </th>

    <th>
      Duration
    </th>

    <th>
      Arrival Date
    </th>
    <th>
      Departure Date
    </th>
    <th>
      Gallery
    </th>
    <th>
      Edit
    </th>
    <th>
      Restore
    </th>
    <th>
      Destroy
    </th>


</tr>
  </thead>

  <tbody>

@foreach($holidays as $holidays)
<tr>
  <td>
    {{$holidays->title}}
  </td>
  <td>
    {{$holidays->packages}}
  </td>
  <td>
    {{$holidays->description}}
  </td>
  <td>
    {{$holidays->city}}
  </td>
  <td>
    {{$holidays->country}}
  </td>
  <td>
    {{$holidays->duration}}
  </td>
  <td>
    {{$holidays->arrival_date}}
  </td>
  <td>
    {{$holidays->departure_date}}
  </td>
  <td>
    <img src="{{asset($holidays->gallery)}}" width="50" height="50">
  </td>
  <td>
    Edit
  </td>
  <td>
    <a href="{{ route('holidays.restore', ['id' => $holidays->id])}}" class="btn btn-success">Restore</a>
  </td>

  <td>
    <a href="{{ route('holidays.kill', ['id' => $holidays->id])}}" class="btn btn-danger">Delete</a>
  </td>
</tr>
@endforeach


  </tbody>

</table>

@endsection
