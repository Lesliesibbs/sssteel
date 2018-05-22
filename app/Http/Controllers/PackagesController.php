<?php

namespace SSSTEELE\Http\Controllers;

use SSSTEELE\Packages;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.packages.index')->with('packagies', Packages::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate($request, [

            'name' => 'required'

          ]);

          $packages = new Packages;

          $packages->name = $request->name;
          $packages->save();

          Session::flash('success', 'Packages created');

          return redirect()->route('packages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $packages = Packages::find($id);

        return view('admin.packages.edit')->with('packages', $packages);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $packages = Packages::find($id);

      $packages->name = $request->name;

      $packages->save();

      Session::flash('success', 'Success');

      return redirect()->route('packages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $packages = Packages::find($id);

        $packages->delete();

        Session::flash('success', 'Success');

        return redirect()->route('packages');
    }
}
