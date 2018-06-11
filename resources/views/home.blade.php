@extends('layouts.app')

@section('content')
<div class="row" style="padding:10px">

    <div class="col-md-3">
        <div class="card p-30">
            <div class="media">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-usd f-s-40 color-primary"></i></span>
                </div>
                <div class="media-body media-text-right">
                    <h2>568120</h2>
                    <p class="m-b-0">Total Revenue</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-30">
            <div class="media">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-shopping-cart f-s-40 color-success"></i></span>
                </div>
                <div class="media-body media-text-right">
                    <h2>1178</h2>
                    <p class="m-b-0">Sales</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-30">
            <div class="media">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                </div>
                <div class="media-body media-text-right">
                    <h2>25</h2>
                    <p class="m-b-0">Total Inventories</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-30">
            <div class="media">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                </div>
                <div class="media-body media-text-right">
                    <h2>847</h2>
                    <p class="m-b-0">Customer</p>
                </div>
            </div>
        </div>
    </div>


<div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Todo</h4>
                    <div class="card-content">
                        <div class="todo-list">
                            <div class="tdl-holder">
                                <div class="tdl-content">
                                    <ul>
                                        <li>
                                            <label>
                  <input type="checkbox"><i class="bg-primary"></i><span>Build an angular app</span>
                  <a href='#' class="ti-close"></a>
                </label>
                                        </li>
                                        <li>
                                            <label>
                  <input type="checkbox" checked><i class="bg-success"></i><span>Creating component page</span>
                  <a href='#' class="ti-close"></a>
                </label>
                                        </li>
                                        <li>
                                            <label>
                  <input type="checkbox" checked><i class="bg-warning"></i><span>Follow back those who follow you</span>
                  <a href='#' class="ti-close"></a>
                </label>
                                        </li>
                                        <li>
                                            <label>
                  <input type="checkbox" checked><i class="bg-danger"></i><span>Design One page theme</span>
                  <a href='#' class="ti-close"></a>
                </label>
                                        </li>

                                        <li>
                                            <label>
                  <input type="checkbox" checked><i class="bg-success"></i><span>Creating component page</span>
                  <a href='#' class="ti-close"></a>
                </label>
                                        </li>
                                    </ul>
                                </div>
                                <input type="text" class="tdl-new form-control" placeholder="Type here">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
@endsection
