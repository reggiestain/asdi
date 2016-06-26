<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Australian Skills Development Institute</title>
        <link href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('libs/bootstrap/css/bootstrap-theme.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('libs/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/defaults.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet"/>
        
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Australian Skills Development Institute</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="/admin">Dashboard</a>
                        </li>
                        <li>
                            <a href="/admin/profile">Profile</a>
                        </li>
                        
                        <li>
                            <a href="/logout"><i class="fa fa-sign-out" ></i > Log Out</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    @include('partials/admin_nav')

                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    @include('notifications')
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
		
		@yield('scripts')
    </body>
</html>