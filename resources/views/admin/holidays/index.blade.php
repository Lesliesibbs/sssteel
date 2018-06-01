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
      Trash
    </th>
    <th>
      Trash
    </th>


</tr>
  </thead>

  <tbody>
@if ($holidays->count() > 0)

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
    <a href="{{ route('holidays.edit', ['id' => $holidays->id])}}" class="btn btn-info">Edit</a>
  </td>
  <td>
    <a href="{{ route('holidays.delete', ['id' => $holidays->id])}}" class="btn btn-danger">Trash</a>
  </td>
<td>
  <a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>
</td>

</tr>
@endforeach
@else

<tr>
<th colspan="5" style="text-center">
No Property
</th>

</tr>
@endif

  </tbody>

</table>

@endsection
