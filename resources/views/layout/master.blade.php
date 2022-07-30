<!DOCTYPE html>
<html lang="en">
@include('layout.includes.head')

<body>
    @include('layout.partials.navbar')
    @yield('content')
    @include('layout.partials.footer')
    @include('layout.includes.script')
</body>

</html>
