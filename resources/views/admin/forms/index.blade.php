@extends('layouts.app')

@section('content')

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
<h3>Forms</h3>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Property Form</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{route('packages.create')}}" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Check-In Form</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{route('check_in.create')}}" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Check-Out Form</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{route('check_out.create')}}" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Initial Inventory FormsController</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{route('inventory.create')}}" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Term Inventory</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{route('term.create')}}" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>

@endsection
