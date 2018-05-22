<?php

namespace SSSTEELE\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{

  public function index()
  {
      return view('admin.forms.index');
  }
}
