<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/bower_components/semantic/dist/semantic.min.css">
<link rel="stylesheet" href="/bower_components/jquery-confirm2/dist/jquery-confirm.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
<!-- Styles -->
@yield('styles')
<title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>

<div class="ui bottom attached segment pushable">
  @include('layouts.partials.sidebar-menu')
  <div class="pusher">
    <div class="ui basic segment">
      @yield('content')
    </div>
  </div>
</div>

<!-- Sidebar menu - responsive only -->
<!-- <div class="ui sidebar inverted vertical menu">
  <a class="item">
  </a>
  <a class="item" href="">
    Dashboard
  </a>
  <a class="gray item">
    Apartments
  </a>
  <a class="item" href="">
   	Rooms
  </a>
  <a class="item" href="">
    Properties
  </a>
  <a class="item" href="">
    Users
  </a>
  <a class="item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
      Logout
  </a>
</div>


<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
{{ csrf_field() }}
</form>

<div class="pusher">
  <div class="ui grid container">
    <div class="ui left fixed vertical inverted menu">
      <a class="item">
      </a>
      <a class="item" href="">
        Dashboard
      </a>
      <a class="gray item">
        Apartments
      </a>
      <a class="item" href="">
       	Rooms
      </a>
      <a class="item" href="">
        Properties
      </a>
      <a class="item" href="">
        Users
      </a>
      <a class="item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Logout
      </a>
    </div>
    <div class="ui main grid">
      <div class="ui fixed inverted main menu">
        <div class="ui container">
          <a class="launch icon item sidebar-toggle">
            <i class="sidebar icon"></i>
          </a>
        </div>
      </div>

      <div class="ui main container">
        
      </div>
     
    </div>
  </div>
</div> -->

<!-- Scripts -->
<script type="text/javascript" src="/js/helpers.js"></script>
<script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="/bower_components/semantic/dist/semantic.min.js"></script>
<script type="text/javascript" src="/bower_components/jquery-confirm2/dist/jquery-confirm.min.js"></script>
@yield('scripts')

</body>
</html>