<html>
    <head>
        @section('styles')
            {{ HTML::style('css/reset.css') }}
            {{ HTML::style('css/master.css') }}
        @show
    </head>
    <body>
        <header>
            header
        </header>
        <div class="group" id="mainBody">
            <nav>
                @include('menu')
            </nav>
            <div id="content">
                @yield('content')
                @if (Auth::check())
                    <div id="adminMenu" class="group">
                        <h3>Admin actions</h3>
                        @yield('admin')
                    </div>
                @endif
            </div>
        </div>
        <footer>
            tu bydzie stopka
        </footer>
        @section('scripts')
            <script type="text/javascript" src="{{ asset('../components/jquery/jquery.min.js') }}"></script>
        @show
    </body>
</html>