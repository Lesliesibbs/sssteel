<?php

namespace SSSTEELE\Http\Controllers;

use SSSTEELE\Calender;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.calendar.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \SSSTEELE\Calender  $calender
     * @return \Illuminate\Http\Response
     */
    public function show(Calender $calender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SSSTEELE\Calender  $calender
     * @return \Illuminate\Http\Response
     */
    public function edit(Calender $calender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SSSTEELE\Calender  $calender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calender $calender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SSSTEELE\Calender  $calender
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calender $calender)
    {
        //
    }
}
