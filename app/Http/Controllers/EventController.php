<?php

namespace SSSTEELE\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use SSSTEELE\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = [];
        $data = Event::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
	                [
	                    'color' => '#f05050',
	                    'url' => 'pass here url and any route',
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($events)->setOptions([ //set fullcalendar options
          'firstDay' => 1,
          'themeSystem' => 'bootstrap3',
          'columnHeader' => false,
          'aspectRatio' => 10,
          'contentHeight' => 400


      ]);
        return view('admin.calendar.fullcalendar', compact('calendar'));
    }
}
