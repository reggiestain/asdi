<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
        <title>Australian Skills Development Institute</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/bootstrap/bootstrap-theme.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/file-uploader/fileinput.css') }}" rel="stylesheet"/>        
        <link href="{{ asset('css/file-uploader/fileinput.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('libs/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('libs/jasny-bootstrap/css/jasny-bootstrap.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/defaults.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/jquery.wizard.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet"/>        
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet"/>
    </head>
    <body>
		<div class="white-bg navbar-fixed-top">
			<div class="container">
				@include('portal.partials.nav')
			</div>
		</div >
		@yield('header')
		<div class="container p-t-5">
            @include('notifications')
            @yield('content')
        </div>
		<footer class="footer" >
			<div class="container" >
				<div class="row m-t-5">
					<div class="col-sm-4 text-center" >
						<img src="{{ asset('img/nrc.png') }}" />
					</div >
					<div class="col-sm-4 text-center" >
						<img src="{{ asset('img/acpet.jpg') }}" />
					</div >
					<div class="col-sm-4 text-center" >
						<img src="{{ asset('img/aqf.jpg') }}" />
					</div >
				</div>
			</div>
			
			<div class="container ">
				<div class="asdi-blue">
					<p class="text-center asdi-blue p-tb-5" >Copyright &copy; 2016 | Australian Skills Development Institute Pty Ltd ABN: 79109449809 |
						<a href="/terms" >Terms of Use</a >
						|
						<a href="/privacy-policy" >Privacy Policy</a >
						| created by
						<a href="fgx.co.za" target="_blank" >FGX Studios</a >
					</p >				
				</div >
			</div >
		</footer>
		
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.wizard.js') }}" type="text/javascript"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>        
        <script src="{{ asset('libs/jasny-bootstrap/js/jasny-bootstrap.min.js') }}" type="text/javascript"></script>
        
        <script src="{{ asset('js/file-uploader/fileinput.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/file-uploader/fileinput.min.js') }}" type="text/javascript"></script>        
	<script src="{{ asset('js/scripts.js') }}" ></script >
		@yield('scripts')
    </body>
</html>
 