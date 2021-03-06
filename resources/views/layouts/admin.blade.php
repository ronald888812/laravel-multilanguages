<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="yip6ksyOV86QCfYblfVsovsjRy1I32Yo2XDmYHpw">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/adminlte/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- Font Awesome -->
 
</head>
<body class="sidebar-mini" >
        <div class="wrapper">    
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#">
                        <i class="fas fa-bars"></i>
                        <span class="sr-only">Toggle navigation</span>
                        </a>
                    </li>
          
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class = "nav-item dropdown" id = "nav-lang">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            {{Config::get('languages') [App::getLocale()]}}
                            <span class = "caret"></span>
                        </a>
                        <ul class = "dropdown-menu">
                            @foreach ((array) Config::get ('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <li>
                                    <a href="{{route('lang.switch', $lang)}} "> {{$language}} </a>
                                </li>
                            @endif
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <span>
                                {{Auth::user()->name}}
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <li class="user-footer">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>    
                </ul>
            </nav>
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <a href="#" class="brand-link ">
                      <img src="{{ asset('dist/img/user4-128x128.jpg') }}" class="img-circle" alt="User Image" width="50" height="50">
                        <span class="brand-text font-weight-light "><b>Admin</b>LTE</span>
                </a>
                <div class="sidebar">
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                      
                            <li  class="nav-item">
                                <a class="nav-link" href="{{ route('product.index') }}"
                                    <i class="fas fa-fw fa-user "></i>
                                    <p>Produk</p>
                                </a>
                            </li>
                          
                        </ul>
                    </nav>
                </div>
            </aside>
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
        <script src="{{asset('vendor/adminlte/dist/js/adminlte.min.js')}}"></script>
        <script> console.log('Hi!'); </script>
</body>
</html>
