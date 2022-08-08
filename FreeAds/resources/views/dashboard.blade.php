<head>
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
@extends('layouts.navigation')
@section('content')


<body>
<div class="container">
<div class="fond"> 
<h1> HELLO {{ Auth::user()->name }} ! WELCOME TO YOUR DASHBOARD </a> </h1>
<div class="avatardash">
  <img src="{{ asset('images/avatars/' . __(auth()->user()->avatar)) }}">   
  </div>  
</div>
</div>

<div class="cards">
  <a class="text-decoration-none" href="{{ route('posts.index') }}">   
<div class="col-sm-4">
    <div class="card">
      <div class="image">
        <img src="{{ asset('images/ads.png') }}" />
      </div>
      <div class="card-inner">
        <div class="header">
          <h1>Your ads</h1>
      </div>
      <div class="content">
        <p>Modify or delete your ads</p>
      </div>
        </div>
    </div>
</a>
  </div>

  <div class="col-sm-4">
    <a class="text-decoration-none" href="{{ route('profile') }}"> 
    <div class="card">
      <div class="image">
        <img src="{{ asset('images/profile.png') }}" />
      </div>
      <div class="card-inner">
        <div class="header">
          <h1>Account settings</h1>
      </div>
      <div class="content">
        <p>Change your information</p>
      </div>
        </div>
    </div>
</a>
  </div>
  <div class="col-sm-4">
    <a class="text-decoration-none" href="{{ 'message-global' }}"> 
    <div class="card">
      <div class="image">
        <img src="{{ asset('images/message.png') }}"/>
      </div>
      <div class="card-inner">
        <div class="header">
          <h1>Messages</h1>
      </div>
      <div class="content">
        <p>Answer to your messages</p>
      </div>
        </div>
    </div>
  </div>
      </div>
  


</body>




@endsection


