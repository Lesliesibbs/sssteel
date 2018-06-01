<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
<<<<<<< HEAD
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script>
      @if(Session::has('success'))
      toastr.success("{{ Session::get('success') }}");
      @endif
      @if(Session::has('info'))
      toastr.success("{{ Session::get('success') }}");
      @endif
      if($request->session()->has('success'))
{
  toastr.success("{{ Session::get('success') }}")

}
    </script>


=======
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

<<<<<<< HEAD


      <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
=======
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

<<<<<<< HEAD
        <!--<main class="py-4">
            @yield('content')
        </main>-->
        <div class="container">
          <main class="py-4">
          <div class="row">

            @if(Auth::check())


            <div class="col-lg-4">
              <ul class="list-group">
                <li class="list-group-item">
                  <a href="{{ route('home')}}">Home</a>
                </li>
                <li class="list-group-item">
                  <a href="{{route('packages')}}">Property</a>
                </li>
                <li class="list-group-item">
                  <a href="{{route('forms')}}">Forms</a>
                </li>
                <li class="list-group-item">
                  <a href="{{route('holidays')}}">All Forms</a>
                </li>

                @if(Auth::user()->admin)



                <li class="list-group-item">
                  <a href="{{route('holidays')}}">Reports</a>
                </li>
                <li class="list-group-item">
                  <a href="{{route('holidays')}}">Email</a>
                </li>
                <li class="list-group-item">
                  <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=KKKP7LSVY6ZSW">Payments</a>
                </li>
                <li class="list-group-item">
                  <a href="{{route('events')}}">Calender</a>
                </li>
                <li class="list-group-item">
                  <a href="{{route('users')}}">Users</a>
                </li>
                <li class="list-group-item">
                  <a href="{{route('holidays.trashed')}}">Trash</a>
                </li>
                <li class="list-group-item">
                  <a href="{{route('holidays')}}">Settings</a>
                </li>
              </ul>
            </div>

            @endif

              @endif

              <div class="col-lg-8">
                @yield('content')
              </div>

          </div>
</main>
        </div>

    </div>


=======
        <main class="py-4">
            @yield('content')
        </main>
    </div>
>>>>>>> 478011d04d67bb0cfff8def9f1c943eacadae3b1
</body>
</html>
