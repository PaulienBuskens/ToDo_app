<!DOCTYPE html>
<head>
    <title>Laravel Todo application</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/solarBootswatch.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{url('/')}}">To do App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>

      @if(Auth::user())
      <li class="nav-item">
        <a class="nav-link" href="{{url('/create')}}">Create</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/archief')}}">Archief</a>
      </li>
      @endif
    </ul>

    <ul class="nav navbar-nav navbar-right">
    @if(Auth::user())

        <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Welkom {{ ucwords(Auth::user()->name) }}</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('/logout')}}"> Logout</a></li>
        
        @else
        <li class="nav-item"><a class="nav-link" href="{{url('/signin')}}"> Login </a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('/register')}}"> Sign Up</a></li>
        @endif
      </ul>
</nav>