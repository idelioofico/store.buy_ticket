<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.header')

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

    @yield('content')

</body>

@include('layouts.footer')

</html>
