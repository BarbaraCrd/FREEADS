<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style_home.css') }}">
    <title>BarFlaTo</title>
  </head>

<body>
<div class="container">
<div class="header">
  <a href="{{ route('home') }}" class="logo"><img class="logo" src="{{ asset('images/logo.png') }}"></a>
  <div class="header-right">
  @auth
    <a href="{{ route('posts.create') }}">CREATE AN AD</a>
  @endauth
  @guest
    <a href="{{ route('login') }}">LOGIN</a>
  @endguest
  @auth
      <a href="{{ route('home') }}">BARFLATO</a>
      <a href="{{ route('dashboard') }}">DASHBOARD</a>
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        LOGOUT
    </a>
    <img class="avatarnav" src="{{ asset('images/avatars/' . __(auth()->user()->avatar)) }}">   
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
  </form>
  @endauth
  </div>
</div>
<section class="dropcollapse">
<div class="dropdown">
  <button class="dropbtn">MENU</button>
  <div class="dropdown-content">
  @auth
      <a href="{{ route('posts.create') }}">CREATE AN AD</a>
    @endauth
    @guest
      <a href="{{ route('login') }}">LOGIN</a>
    @endguest
    @auth
      <a href="{{ route('home') }}">BARFLATO</a>
      <a href="{{ route('dashboard') }}">DASHBOARD</a>
      <a href="{{ route('logout') }}">LOGOUT</a>
    @endauth
  </div>
</div>
</section>
  
<div class="container-fluid">
    @yield('content')
</div>
   
</body>
</html>