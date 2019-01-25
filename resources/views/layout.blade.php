<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mini Crm</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="/">Mini CRM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          @if (Route::has('login'))
            <ul class="navbar-nav ml-auto">
              <li class="nav-item  {{ request()->is('/') ? 'active' : '' }}">
                <a class="nav-link" href="/">Home</a>
              </li>
              @auth
                <li class="nav-item {{ request()->is('companies') ? 'active' : '' }}">
                  <a class="nav-link" href="/companies">Companies</a>
                </li>
                <li class="nav-item {{ request()->is('employees') ? 'active' : '' }}">
                  <a class="nav-link" href="/employees">Employees</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/logout">Logout</a>
                </li>
              @else
                <li class="nav-item {{ request()->is('login') ? 'active' : '' }}">
                  <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item {{ request()->is('register') ? 'active' : '' }}">
                  <a class="nav-link" href="/register">Register</a>
                </li>                
              @endif
            </ul>
          @endif
        </div>
      </div>
    </nav>
    
    <div class="my-auto" style="height: 20px;"></div>

    @yield('content')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  </body>

</html>