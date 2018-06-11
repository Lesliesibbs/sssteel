<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">



      <!-- Styles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.time-picker/latest/tui-time-picker.css">
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.date-picker/latest/tui-date-picker.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/tui-calendar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/default.css') }}"></link>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icons.css') }}"></link>

    <link href="{{ asset('css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/calendar2/semantic.ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

</head>

<body class="fix-header">
  <!-- Main wrapper  -->
  <div id="main-wrapper">
      <!-- header header  -->
      <div class="header">
          <nav class="navbar top-navbar navbar-expand-md navbar-light">
                        <!-- Logo -->
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <!-- Logo icon -->

                              <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="homepage" class="dark-logo" /></a>
                                <!--End Logo icon -->
                                </a>
                        </div>
                        <!-- End Logo -->
                        <div class="navbar-collapse">
                            <!-- toggle and nav items -->
                            <ul class="navbar-nav mr-auto mt-md-0">
                            </ul>
                            <!-- User profile and search -->
                            <ul class="navbar-nav my-lg-0">

                                <!-- Search -->
                                <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="#"><i class="ti-search"></i></a>
                                    <form class="app-search">
                                        <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                                </li>
                                <!-- Comment -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i>
        								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
        							</a>
                                    <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                        <ul>
                                            <li>
                                                <div class="drop-title">Notifications</div>
                                            </li>
                                            <li>
                                                <div class="message-center">
                                                    <!-- Message -->
                                                    <a href="#">
                                                        <div class="btn btn-danger btn-circle m-r-10"><i class="fa fa-link"></i></div>
                                                        <div class="mail-contnet">
                                                            <h5>This is title</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                                        </div>
                                                    </a>
                                                    <!-- Message -->
                                                    <a href="#">
                                                        <div class="btn btn-success btn-circle m-r-10"><i class="ti-calendar"></i></div>
                                                        <div class="mail-contnet">
                                                            <h5>This is another title</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
                                                        </div>
                                                    </a>
                                                    <!-- Message -->
                                                    <a href="#">
                                                        <div class="btn btn-info btn-circle m-r-10"><i class="ti-settings"></i></div>
                                                        <div class="mail-contnet">
                                                            <h5>This is title</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                                                        </div>
                                                    </a>
                                                    <!-- Message -->
                                                    <a href="#">
                                                        <div class="btn btn-primary btn-circle m-r-10"><i class="ti-user"></i></div>
                                                        <div class="mail-contnet">
                                                            <h5>This is another title</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- End Comment -->
                                <!-- Messages -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
        								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
        							</a>
                                    <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                                        <ul>
                                            <li>
                                                <div class="drop-title">You have 4 new messages</div>
                                            </li>
                                            <li>
                                                <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- End Messages -->
                                <!-- Profile -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('images/users/5.jpg') }}" alt="user" class="profile-pic" /></a>
                                    <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                        <ul class="dropdown-user">
                                          @guest
                                              <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                              <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                          @else
                                                  <li><a href="#"><i class="ti-user"></i> {{ Auth::user()->name }}</a></li>
                                                      <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                                      <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                                      <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                                      <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                                         onclick="event.preventDefault();
                                                                       document.getElementById('logout-form').submit();">
                                                          {{ __('Logout') }}
                                                      </a>

                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                          @csrf
                                                      </form>
                                          @endguest

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- End header header -->
                <!-- Left Sidebar  -->
                @if(Auth::check())
                <div class="left-sidebar">
                    <!-- Sidebar scroll-->
                    <div class="scroll-sidebar">
                        <!-- Sidebar navigation-->
                        <nav class="sidebar-nav">
                            <ul id="sidebarnav">
                                <li class="nav-devider"></li>
                                <li class="nav-label">Home</li>
                                <li> <a  href="{{ route('home')}}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard </span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="index.html">Ecommerce </a></li>
                                        <li><a href="index1.html">Analytics </a></li>
                                    </ul>
                                </li>
                                <li class="nav-label">Apps</li>
                                <li> <a  href="{{route('email')}}" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Email</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="email-compose.html">Compose</a></li>
                                        <li><a href="email-read.html">Read</a></li>
                                        <li><a href="email-inbox.html">Inbox</a></li>
                                    </ul>
                                </li>
                                <li> <a href="{{route('calendar')}}" aria-expanded="false"><i class="fa fa-calendar"></i>
                                  <span class="hide-menu">Calendar</span></a>
                                </li>
                                <li> <a  href="#" aria-expanded="false"><i class="fa fa-gbp"></i><span class="hide-menu">Payments</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="chart-flot.html">Flot</a></li>
                                        <li><a href="chart-morris.html">Morris</a></li>
                                        <li><a href="chart-chartjs.html">ChartJs</a></li>
                                        <li><a href="chart-chartist.html">Chartist </a></li>
                                        <li><a href="chart-amchart.html">AmChart</a></li>
                                        <li><a href="chart-echart.html">EChart</a></li>
                                        <li><a href="chart-sparkline.html">Sparkline</a></li>
                                        <li><a href="chart-peity.html">Peity</a></li>
                                    </ul>
                                </li>
                                <li class="nav-label">Features</li>
                                <li> <a  href="{{route('users')}}" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Users </span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="ui-alert.html">Alert</a></li>
                                        <li><a href="ui-button.html">Button</a></li>
                                        <li><a href="ui-dropdown.html">Dropdown</a></li>
                                        <li><a href="ui-progressbar.html">Progressbar</a></li>
                                        <li><a href="ui-tab.html">Tab</a></li>
                                        <li><a href="ui-typography.html">Typography</a></li>
                                    </ul>
                                </li>
                    <li> <a  href="{{route('holidays.trashed')}}" aria-expanded="false"><i class="fa fa-trash"></i><span class="hide-menu">Trash </span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="uc-calender.html">Calender</a></li>
                                        <li><a href="uc-datamap.html">Datamap</a></li>
                                        <li><a href="uc-nestedable.html">Nestedable</a></li>
                                        <li><a href="uc-sweetalert.html">Sweetalert</a></li>
                                        <li><a href="uc-toastr.html">Toastr</a></li>
                                        <li><a href="uc-weather.html">Weather</a></li>
                                    </ul>
                                </li>
                                <li> <a  href="{{route('forms')}}" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Properties</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="form-basic.html">Basic Forms</a></li>
                                        <li><a href="form-layout.html">Form Layout</a></li>
                                        <li><a href="form-validation.html">Form Validation</a></li>
                                        <li><a href="form-editor.html">Editor</a></li>
                                        <li><a href="form-dropzone.html">Dropzone</a></li>
                                    </ul>
                                </li>
                                <li> <a  href="{{route('forms')}}" aria-expanded="false"><i class="fa fa-file-pdf-o"></i><span class="hide-menu">Forms</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="form-basic.html">Basic Forms</a></li>
                                        <li><a href="form-layout.html">Form Layout</a></li>
                                        <li><a href="form-validation.html">Form Validation</a></li>
                                        <li><a href="form-editor.html">Editor</a></li>
                                        <li><a href="form-dropzone.html">Dropzone</a></li>
                                    </ul>
                                </li>
                                <li> <a  href="#" aria-expanded="false"><i class="fa fa-cogs"></i><span class="hide-menu">Settings</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="table-bootstrap.html">Basic Tables</a></li>
                                        <li><a href="table-datatable.html">Data Tables</a></li>
                                    </ul>
                                </li>
                                <li class="nav-label">Layout</li>
                                <li> <a  href="#" aria-expanded="false"><i class="fa fa-columns"></i><span class="hide-menu">Layout</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="layout-blank.html">Blank</a></li>
                                        <li><a href="layout-boxed.html">Boxed</a></li>
                                        <li><a href="layout-fix-header.html">Fix Header</a></li>
                                        <li><a href="layout-fix-sidebar.html">Fix Sidebar</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                        <!-- End Sidebar navigation -->
                    </div>
                    <!-- End Sidebar scroll-->
                </div>

                <!-- End Left Sidebar  -->
                <!-- Left Sidebar  -->
                <div class="left-sidebar">
                    <!-- Sidebar scroll-->
                    <div class="scroll-sidebar">
                        <!-- Sidebar navigation-->
                        <nav class="sidebar-nav">
                            <ul id="sidebarnav">
                                <li class="nav-devider"></li>
                                <li class="nav-label">Home</li>
                                <li> <a  href="{{ route('home')}}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard </span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="index.html">Ecommerce </a></li>
                                        <li><a href="index1.html">Analytics </a></li>
                                    </ul>
                                </li>
                                <li class="nav-label">Apps</li>
                                <li> <a  href="{{route('email')}}" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Email</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="email-compose.html">Compose</a></li>
                                        <li><a href="email-read.html">Read</a></li>
                                        <li><a href="email-inbox.html">Inbox</a></li>
                                    </ul>
                                </li>
                                <li> <a href="{{route('calendar')}}" aria-expanded="false"><i class="fa fa-calendar"></i>
                                  <span class="hide-menu">Calendar</span></a>

                                </li>
                                <li> <a  href="#" aria-expanded="false"><i class="fa fa-gbp"></i><span class="hide-menu">Payment</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="chart-flot.html">Flot</a></li>
                                        <li><a href="chart-morris.html">Morris</a></li>
                                        <li><a href="chart-chartjs.html">ChartJs</a></li>
                                        <li><a href="chart-chartist.html">Chartist </a></li>
                                        <li><a href="chart-amchart.html">AmChart</a></li>
                                        <li><a href="chart-echart.html">EChart</a></li>
                                        <li><a href="chart-sparkline.html">Sparkline</a></li>
                                        <li><a href="chart-peity.html">Peity</a></li>
                                    </ul>
                                </li>
                                <li class="nav-label">Features</li>
                                <li> <a  href="{{route('forms')}}" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Properties</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="form-basic.html">Basic Forms</a></li>
                                        <li><a href="form-layout.html">Form Layout</a></li>
                                        <li><a href="form-validation.html">Form Validation</a></li>
                                        <li><a href="form-editor.html">Editor</a></li>
                                        <li><a href="form-dropzone.html">Dropzone</a></li>
                                    </ul>
                                </li>
                                <li> <a  href="{{route('forms')}}" aria-expanded="false"><i class="fa fa-wpforms"></i><span class="hide-menu">Forms</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="form-basic.html">Basic Forms</a></li>
                                        <li><a href="form-layout.html">Form Layout</a></li>
                                        <li><a href="form-validation.html">Form Validation</a></li>
                                        <li><a href="form-editor.html">Editor</a></li>
                                        <li><a href="form-dropzone.html">Dropzone</a></li>
                                    </ul>
                                </li>
                                <li> <a  href="{{route('holidays')}}" aria-expanded="false"><i class="fa fa-file-pdf-o"></i><span class="hide-menu">Reports</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="form-basic.html">Basic Forms</a></li>
                                        <li><a href="form-layout.html">Form Layout</a></li>
                                        <li><a href="form-validation.html">Form Validation</a></li>
                                        <li><a href="form-editor.html">Editor</a></li>
                                        <li><a href="form-dropzone.html">Dropzone</a></li>
                                    </ul>
                                </li>
                                <li> <a  href="{{route('users')}}" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Users </span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="ui-alert.html">Alert</a></li>
                                        <li><a href="ui-button.html">Button</a></li>
                                        <li><a href="ui-dropdown.html">Dropdown</a></li>
                                        <li><a href="ui-progressbar.html">Progressbar</a></li>
                                        <li><a href="ui-tab.html">Tab</a></li>
                                        <li><a href="ui-typography.html">Typography</a></li>
                                    </ul>
                                </li>
                    <li> <a  href="{{route('holidays.trashed')}}" aria-expanded="false"><i class="fa fa-trash"></i><span class="hide-menu">Trash</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="uc-calender.html">Calender</a></li>
                                        <li><a href="uc-datamap.html">Datamap</a></li>
                                        <li><a href="uc-nestedable.html">Nestedable</a></li>
                                        <li><a href="uc-sweetalert.html">Sweetalert</a></li>
                                        <li><a href="uc-toastr.html">Toastr</a></li>
                                        <li><a href="uc-weather.html">Weather</a></li>
                                    </ul>
                                </li>

                                <li> <a  href="#" aria-expanded="false"><i class="fa fa-cogs"></i><span class="hide-menu">Settings</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="table-bootstrap.html">Basic Tables</a></li>
                                        <li><a href="table-datatable.html">Data Tables</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                        <!-- End Sidebar navigation -->
                    </div>
                    <!-- End Sidebar scroll-->
                </div>
                <!-- End Left Sidebar  -->
                <div class="page-wrapper" style="height:1200px;">
                    <!-- Bread crumb -->
                    <div class="row page-titles">
                        <div class="col-md-5 align-self-center">
                            <h3 class="text-primary">Dashboard</h3> </div>
                        <div class="col-md-7 align-self-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <!-- End Bread crumb -->
                @endif
                <div class="container-fluid">

          @yield('content')
        </div>
            </div>
    </div>

      <script src="{{ asset('js/scripts.js') }}"></script>

      @include ('layout.scripts')
      @yield('script')

</body>
</html>
