<?php

namespace SSSTEELE\Http\Controllers;

use SSSTEELE\Check_In;
use Illuminate\Http\Request;

class CheckInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.forms.check_in.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.forms.check_in.create');

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
     * @param  \SSSTEELE\Check_In  $check_In
     * @return \Illuminate\Http\Response
     */
    public function show(Check_In $check_In)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SSSTEELE\Check_In  $check_In
     * @return \Illuminate\Http\Response
     */
    public function edit(Check_In $check_In)
    {
      return view('admin.forms.check_in.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SSSTEELE\Check_In  $check_In
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Check_In $check_In)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SSSTEELE\Check_In  $check_In
     * @return \Illuminate\Http\Response
     */
    public function destroy(Check_In $check_In)
    {
        //
    }
}
