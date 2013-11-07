@section('styles')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
@stop
<html>
    <head>
        @yield('styles')
    </head>
    <body class='group'>
        <nav class="group">
            @include('menu')
        </nav>
        <div class="group">
            <div class="content">
                @if (isset($validationResult))
                    @foreach($validationResult->ErrorList() as $error)
                    <p class="error">{{ $error }}</p>
                    @endforeach
                @endif
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
        <script type="text/javascript" src="{{ asset('../components/jquery/jquery.min.js') }}"></script>
        @yield('scripts')
    </body>
</html>