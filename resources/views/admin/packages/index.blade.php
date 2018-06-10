@extends('layouts.app')

@section('content')
<div class="panel-heading">
  <div class="row">
  <div class="col-md-4 text-left panel-title">Properties</div>
  <div class="col-md-8 text-right panel-title">Add   <a href="{{route('packages.create')}}" class="btn btn-xs btn-info" role="button">+</a>
</div>
</div>
</div>
  <table class="table table-hover">


  <thead>
<tr>

    <th>
      Property Type
    </th>
    <th>
      House No/Name
    </th>
    <th>
      Address 1
    </th>
    <th>
      City
    </th>
    <th>
      Postcode
    </th>
    <th>
      Tenancy
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
@if($packagies->count() > 0)

@foreach($packagies as $packages)

  <tr>
  <td>

    {{ $packages->property_type }}

  </td>
  <td>

    {{ $packages->house_name }}

  </td>

<td>

  {{ $packages->address_1 }}

</td>
<td>

  {{ $packages->city }}

</td>
<td>

  {{ $packages->postcode }}

</td>
<td>

  {{ $packages->tenancy_type }}

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
