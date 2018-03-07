<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      @yield('title')
    </title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}" />

    <style>
      @yield('styles')
    </style>


  </head>
  <body>

      @include('nav')

      <div role="main" class="container">
          <div class="starter-template">

          @yield('mainContent')

      </div>
      </div>

</body>
</html>
