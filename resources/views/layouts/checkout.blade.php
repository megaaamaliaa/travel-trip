<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

  </head>
  <body>
    <!-- Navbar -->
    @include('includes.navbar-alternate')

    @yield('content')

    <!-- Footer -->
   @include('includes.footer')

    @stack('prepend-script')
   {{-- script --}}
    @include('includes.script')
    @stack('addon-script')

  </body>
</html>
