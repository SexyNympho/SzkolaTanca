<?php
/**
 * Created by JetBrains PhpStorm.
 * User: MateuszT
 * Date: 27/10/13
 * Time: 12:22
 * To change this template use File | Settings | File Templates.
 */
?>

<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
    </head>
    <body>
        <div>
            @yield('content')
            <a href="{{ Request::header('referer') }}">Back</a>
        </div>
        
        <script type="text/javascript" src="{{ asset('../components/jquery/jquery.min.js') }}"></script>
        @yield('scripts')
    </body>
</html>