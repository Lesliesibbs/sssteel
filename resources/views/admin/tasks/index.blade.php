@extends('layouts.app')

@section('content')

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
<h3>Calendar</h3>

<div id='calendar'></div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js'></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            events : [
                @foreach($tasks as $tasks)
                {
                    title : '{{ $tasks->name }}',
                    start : '{{ $tasks->task_date }}'
                },
                @endforeach
            ]
        })
    });

@endsection
