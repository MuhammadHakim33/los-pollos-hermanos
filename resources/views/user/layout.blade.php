<!DOCTYPE html>
<html lang="en">
<head>
    @include('user.partials.head')
</head>
<body class="bg-gray-100 font-sans">
    @yield('header')

    @yield('content')

    @include('user.partials.script')
</body>
</html>