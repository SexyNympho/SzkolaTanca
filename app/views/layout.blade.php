<html>
    <head>
        @section('styles')
            <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
        @show
    </head>
    <body class='group'>
        <nav class="group">
            @include('menu')
        </nav>
        <div class="group">
            <div class="content">
                @yield('content')
            </div>
            @if (Auth::check())
            <div id="adminMenu">
                <h3>Admin actions</h3>
                @yield('admin')
            </div>
            @endif
        </div>
        <footer>
            tu bydzie stopka
        </footer>
        @section('scripts')
            <script type="text/javascript" src="{{ asset('../components/jquery/jquery.min.js') }}"></script>
        @show
    </body>
</html>