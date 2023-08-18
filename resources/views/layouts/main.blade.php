<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Arab Workers </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-white bg-white" dir="rtl" style="padding-right:10%">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="padding-right:10%">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" style="border-bottom: 5px;" href="#"><img src="{{ asset('img/logo.svg') }}" width="150px" height="30px" alt=""></a>
        <a class="nav-item nav-link" style="text-decoration: underline 2px red;" href="#">Home</a>
        <a class="nav-item nav-link" href="#">Browse Task</a>
        <a class="nav-item nav-link" href="#">Create Task</a>
        <a class="nav-item nav-link" href="#"> About US</a>

      </div>
    </div>
        <div class="col ">
            <input class="btn border" type="button" value="Register" style="margin-left:3%">
            <input class="btn btn-success" type="button" value="Login" style="">
        </div>
  </nav>

  @yield('content')

@extends('layouts.footer')
</body>
</html>
