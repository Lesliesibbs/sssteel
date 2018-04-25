<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Packages;

class HolidaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.holidays.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.holidays.create')->with('packagies', Packages::all());

      //  return view('admin.holidays.create')->with('packages', Packages::all());
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

          'title' => 'required|max:255',
          'description' => 'required',
          'city' => 'required|max:255',
          'country' => 'required|max:255',
          'duration' => 'required|max:255',
          'arrival' => 'required',
          'departure' => 'required',
          'gallery' => 'required|image',
          'packages_id' => 'required'

        ]);

        $gallery = $request->gallery;

        $gallery_new_name = time().$gallery->getClientOriginalName();

        $gallery->move('uploads/holidays', $gallery_new_name);

        $holidays = Holidays::create([

          'title' => $request->title,
          'description' => $request->description,
          'city' => $request->city,
          'country' => $request->country,
          'duration' => $request->duration,
          'arrival' => $request->arrival,
          'departure' => $request->departure,
          'gallery' => 'uploads/holidays' . $gallery_new_name,
          'packages_id' => $request->packages_id,

          
        ]);

        dd($request->all());
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
