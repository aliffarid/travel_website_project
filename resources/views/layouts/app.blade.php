<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title> @yield('title') </title>
        @stack('prepand-style')
        @include('includes.style')
        @stack('addon-style')
        <link rel="shortcut icon" href="#">
    </head>
    <body>
        @include('includes.navbar')
        @yield('content')
        @include('includes.footer')
        @stack('prepand-script')
        @include('includes.script')
        @stack('addon-script')
    </body>
</html>



