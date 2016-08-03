<!DOCTYPE html>
<html>
<head>
    @include('layouts.parts.head')
</head>
<body>
@include('layouts.parts.header')
@yield('content')
@include('layouts.parts.footer')
@include('layouts.parts.foot')
@yield('scripts')
</body>
</html>