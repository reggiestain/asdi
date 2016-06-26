<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Australian Skills Development Institute</title>
        <link href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('libs/bootstrap/css/bootstrap-theme.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('libs/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/defaults.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet"/>


        
    </head>
    <body>
        <div class="container">
            @include('notifications')
            @yield('content')
        </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
		
		@yield('scripts')
    </body>
</html>
 