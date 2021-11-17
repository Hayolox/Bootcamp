<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('includes.links')

    <title>@yield('title')</title>
</head>

<body>

    @include('includes.navbar')

    @yield('content')

    @include('includes.scripts')

</body>

</html>