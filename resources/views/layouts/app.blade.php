<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title></title>

    @stack('prepend-style')
    @include('includes.style')

</head>
<body>
    <div id="preloader"></div>
    <div class="wrapper">
        @include('includes.header')
        @yield('content')
        @include('includes.footer')

        @include('includes.script')
    </div>
</body>
</html>