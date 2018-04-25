@extends('layouts.app')

@section('content')
<div class="panel-heading">
  Categories
</div>
  <table class="table table-hover">


  <thead>
<tr>

    <th>
      Package Name
    </th>

    <th>
      Edit
    </th>

    <th>
      Delete
    </th>
</tr>
  </thead>

  <tbody>

@foreach($packagies as $packages)

  <tr>

<td>

  {{ $packages->name }}

</td>

<td>

  <a href="{{ route('packages.edit', ['id' => $packages->id])}}" class="btn btn-xs btn-info">

-

  </a>

</td>

<td>

  <a href="{{ route('packages.delete', ['id' => $packages->id])}}" class="btn btn-xs btn-danger">

x
  </a>

</td>

  </tr>

  @endforeach

  </tbody>

</table>

@endsection
