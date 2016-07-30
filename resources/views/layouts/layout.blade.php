<!DOCTYPE html>
<html>
<head>
    @include('layouts.parts.head')
</head>
<body>

<div id="app">
    <header>
        @include('layouts.parts.header')
    </header>
        @yield('content')
</div>
@include('layouts.parts.footer')
@include('layouts.parts.foot')
@yield('scripts')
</body>
</html>