<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name', 'INT')}}</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">  
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>   


  @include('inc.navbar')

  @yield('content')     

  @include('inc.footer')
 
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>  
  <script src="{{asset('js/init.js')}}"></script>
  
  @include('inc.messages')
  
</body>
</html>