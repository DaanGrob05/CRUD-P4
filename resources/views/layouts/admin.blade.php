<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes/head')
    <body>
        @yield('mainContent')

        {{-- @include('includes/footer') --}}
    </body>

</html