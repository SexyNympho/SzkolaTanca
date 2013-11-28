<html>
    <head>
        @section('styles')
            {{ HTML::style('css/reset.css') }}
            {{ HTML::style('css/master.css') }}
            {{ HTML::style('../components/colorbox/example1/colorbox.css') }}
        @show
    </head>
    <body>
        @include('users/headerBar')
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
            {{ HTML::script('../components/jquery/jquery.min.js') }}
            {{ HTML::script('../components/colorbox/jquery.colorbox-min.js') }}
            {{ HTML::script('js/runColorbox.js') }}
        @show
    </body>
</html>