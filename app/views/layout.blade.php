<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
    </head>
    <body class='group'>
        <nav class="group">
            @include('menu')
        </nav>
        <div class="content">
            @if (isset($validationResult))
                @foreach($validationResult->ErrorList() as $error)
                <p class="error">{{ $error }}</p>
                @endforeach
            @endif
            @yield('content')
        </div>
        <div id="adminMenu">
            <h3>Admin actions</h3>
            @yield('admin')
        </div>
        <script type="text/javascript" src="{{ asset('../components/jquery/jquery.min.js') }}"></script>
        @yield('scripts')
    </body>
</html>