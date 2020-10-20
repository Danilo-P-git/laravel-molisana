<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    @include('partial.header')
    <main>
      @yield('mainContent')
    </main>
    @include('partial.footer')
  </body>
</html>
