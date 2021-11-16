<!DOCTYPE html>
<html lang="en">

    <head>
        <title>@yield('title')</title>

        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        {{-- Style --}}
        @stack('prepand-style')
        @include('includes.style')
        @stack('addon-style')
    </head>
    <body>

         {{-- Page Content --}}
        @yield('content')

        @include('includes.footer')

        {{-- Script --}}
        @stack('prepand-script')
        @include('includes.script')
        @stack('addon-script')
    </body>
</html>