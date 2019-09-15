<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/pikaday.css') }}">

        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Violation Policy</title>
</head>
<body>
  <div class="columns admin-panel is-gapless">

    @if(Auth::check())

        <!-- Col Navigation -->
        <div class="column is-one-fifth has-background-grey-dark menu-container">
        <aside class="menu">
            <ul class="menu-list">
            <li>
            <a href="{{ route('profile') }}" class="has-text-white is-size-5"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li>
            <a href="{{ route('subjects')}}" class="has-text-white is-size-5"> <i class="fa fa-book"></i> Subjects</a>
            </li>
            <li>
                <a class="has-text-white is-size-5 menu-link"> <i class="fa fa-chalkboard-teacher"></i> Classes</a>
                <ul class="menu-sublinks">
                <li><a href="{{ route('view-classes') }}" class="has-text-white is-size-6">View classes</a></li>
                <li><a href="" class="has-text-white is-size-6">Add class</a></li>
                </ul>
            </li>
            <li>
                <a class="has-text-white is-size-5 menu-link" > <i class="fa fa-fist-raised"></i> Policies</a>
                <ul class="menu-sublinks">
                <li><a href="#" class="has-text-white is-size-6">View policies</a></li>
                <li><a class="has-text-white is-size-6">Add policy</a></li>
                </ul>
            </li>
            <li><a href="{{ route('reports') }}" class="has-text-white is-size-5"> <i class="fa fa-chart-bar"></i> Reports</a></li>
            </ul>

        </aside>
        </div>
     @endif
    <!-- Col Content -->
    <div class="column">
      <!-- Row Nav -->
      <nav class="navbar has-background-primary" role="navigation" aria-label="main navigation">
      
           <div class="navbar-brand">
            
           <a class="navbar-item has-text-white" href="{{ route('login') }}">
              <strong>Logo</strong>
            </a>
           
          
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
              data-target="navbarBasicExample">
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
            </a>
          </div> 


          <div id="navbarBasicExample" class="navbar-menu">
            <!-- <div class="navbar-start ">
              <a class="navbar-item has-text-white">
                Home
              </a>
          
            </div> -->
          
            <div class="navbar-end">
              <div class="navbar-item">
                @if (Auth::check())
                 <h3 class="has-text-white has-text-weight-bold nav-greeting">Hi Peter Parker!</h3>
                @endif
                <div class="buttons">
                   @if (Auth::check())
                       <a class="button is-light">
                            Log out
                       </a>
                    @else
                       <a href="{{ route('enroll') }}" class="button is-primary">Enroll</a>   
                        <a href="{{ route('login') }}" class="button is-light">Login</a>
                    @endif
                </div>
              </div>
            </div>
          </div>

      </nav>
      <!-- End Nav -->
      
      @yield('content')

    </div>
  </div>

  
  <script src="https://kit.fontawesome.com/e33b567028.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>