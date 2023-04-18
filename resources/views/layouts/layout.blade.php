<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/js/app.js'])
    <title>@yield('title')</title>
  </head>
  <body>
    @include('includes.header')

    @if (Request::is('/'))
        @include('includes.sBlock')
    @endif

    <div class="container mt-5">
        <div class="row">
            <div class="col-8">
                @yield('content')
            </div>
            <div class="col-4">
                @include('includes.sideMenu')
            </div>
        </div>
    </div>
    @include('includes.footer')
  </body>
</html>
