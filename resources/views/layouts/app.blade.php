<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
<li><a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a></li><li><a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
                        @else
  <li><a href="/companies"><i class="fa fa-building" aria-hidden="true"></i>companies</a></li>
<li><a href="{{ url('/projects') }}"><i class="fa fa-briefcase" aria-hidden="true"></i>Projects</a></li>
<li><a href="{{ url('tasks/') }}"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Tasks</a></li>

                @if(Auth::user()->role_id === 1)
                            <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user" aria-hidden="true">
                                    Admin <span class="caret"></span>
                                </a></i>

             <ul class="dropdown-menu" role="menu">
<li><a href="{{ url('/projects') }}"><i class="fa fa-briefcase" aria-hidden="true"></i>All Projects</a></li>
<li><a href="{{ url('/users') }}"><i class="fa fa-user" aria-hidden="true"></i>All Users</a></li>
<li><a href="{{ url('/profile') }}"><i class="fa fa-user" aria-hidden="true"></i>Create New Profile</a></li>
<li><a href="{{ url('/tasks') }}"><i class="fa fa-tasks" aria-hidden="true"></i>All Tasks</a></li>
<li><a href="{{ url('/companies') }}"><i class="fa fa-building" aria-hidden="true"></i>All Companies</a></li>

<li><a href="{{ url('/roles') }}"><i class="fa fa-envelope" aria-hidden="true"></i>All Roles</a></li>
                                
                                </ul>
                            </li>
                  @endif

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
         <div class="container">
                 @include('partials.errors')
                 @include('partials.success')
                  
             <div class="row">
                  @yield('content')
             </div>
         </div>
       
    </div>
    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://use.fontawesome.com/56e67c1f60.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


</body>
</html>
