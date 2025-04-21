<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.style')
    <title>@yield('title')</title>
</head>
<body>
    @include('includes.header')

    @yield('content')

    @include('includes.footer')
    @include('includes.script')
</body>
</html>
