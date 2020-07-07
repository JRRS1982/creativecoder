<!DOCTYPE HTML>

<html>
    <head>
        @include('partials.head')
    </head>

    <body class="is-preload">
        <div id="wrapper">
            @yield('content')
            @include('partials.main-sidebar')
        </div>
        <div class="container">
            @include('partials.footer-scripts')
        </div>
    </body>
</html>