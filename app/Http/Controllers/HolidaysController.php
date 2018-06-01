<?php

namespace SSSTEELE\Http\Controllers;
use SSSTEELE\Holidays;
use Illuminate\Http\Request;
use SSSTEELE\Packages;
use Session;
use DB;
use PDF;


class HolidaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.holidays.index')->with('holidays', Holidays::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $packages = Packages::all();

      if($packages->count() == 0)

      {
        Session::flash('info', 'you must have some pakcges before creating posts');

          return redirect()->back();
      }

      return view('admin.holidays.create')->with('packagies', $packages);

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
          'arrival_date' => $request->arrival,
          'departure_date' => $request->departure,
          'gallery' => 'uploads/holidays' . $gallery_new_name,
          'packages_id' => $request->packages_id,
          'slug' => str_slug($request->title)


        ]);

        Session::flash('success', 'Holiday Created Successfully');

        return redirect()->back();
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
        $holidays = Holidays::find($id);
        return view('admin.holidays.edit')->with('holidays', $holidays)->with('packagies', Packages::all());
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
        $holidays = Holidays::find($id);

        $holidays->delete();

        Session::flash('success', 'Post trashed');

          return redirect()->back();
    }

    public function trashed()
    {
      $holidays = Holidays::onlyTrashed()->get();

      return view('admin.holidays.trashed')->with('holidays', $holidays);

    }
    public function kill($id)
    {
      $holiday = Holidays::withTrashed()->where('id', $id)->first();
      $holiday->forceDelete();

      Session::flash('success', 'done');
      return redirect()->back();
    }
    public function restore($id){
      $holiday = Holidays::withTrashed()->where('id', $id)->first();
      $holiday->restore();

      Session::flash('success', 'done');

      return redirect()->route('holidays');


    }

    public function pdfview(Request $request)
    {

      $holidays = Holidays::all();
      view()->share('holidays',$holidays);

        if($request->has('download')){
            $pdf = PDF::loadView('pdfview');
            return $pdf->download('pdfview.pdf');
        }


        return view('pdfview');
    }

}
