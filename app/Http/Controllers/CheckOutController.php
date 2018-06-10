<?php

namespace SSSTEELE\Http\Controllers;

use SSSTEELE\Check_Out;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.forms.check_out.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.forms.check_out.create');

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
     * @param  \SSSTEELE\Check_Out  $check_Out
     * @return \Illuminate\Http\Response
     */
    public function show(Check_Out $check_Out)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SSSTEELE\Check_Out  $check_Out
     * @return \Illuminate\Http\Response
     */
    public function edit(Check_Out $check_Out)
    {
      return view('admin.forms.check_in.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SSSTEELE\Check_Out  $check_Out
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Check_Out $check_Out)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SSSTEELE\Check_Out  $check_Out
     * @return \Illuminate\Http\Response
     */
    public function destroy(Check_Out $check_Out)
    {
        //
    }
}
