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
            'property_type' => 'required|max:255',
            'house_name' => 'required|max:255',
            'address_1' => 'required|max:255',
            'address_2' => 'required|max:255',
            'address_3' => 'required|max:255',
            'city' => 'required|max:255',
            'county' => 'required|max:255',
            'country' => 'required|max:255',
            'postcode' => 'required|max:255',
            'tenancy_type' => 'required|max:255'

          ]);

          $packages = new Packages;

            $packages->property_type = $request->property_type;
            $packages->house_name = $request->house_name;
            $packages->address_1 = $request->address_1;
            $packages->address_2 = $request->address_2;
            $packages->address_3 = $request->address_3;
            $packages->city = $request->city;
            $packages->county = $request->county;
            $packages->country = $request->country;
            $packages->postcode = $request->postcode;
            $packages->tenancy_type = $request->tenancy_type;

            $packages->save();

        /** $packages->name = $request->name;
        *  $packages->save();
        */
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

      $packages->property_type = $request->property_type;
      $packages->house_name = $request->house_name;
      $packages->address_1 = $request->address_1;
      $packages->address_2 = $request->address_2;
      $packages->address_3 = $request->address_3;
      $packages->city = $request->city;
      $packages->county = $request->county;
      $packages->postcode = $request->postcode;
      $packages->country = $request->country;
      $packages->tenancy_type = $request->tenancy_type;

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
