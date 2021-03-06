<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			Gristech MyApp
			@show
		</title>
		<meta name="keywords" content="php, laravel, bootstrap, symfony" />
		<meta name="author" content="rgrigga" />
		<meta name="description" content="Web Design, Software Engineering, and Learning Resources" />

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS
		================================================== -->
        {{ Basset::show('public-css.css') }}


<style>
	html,body{
		

		 /*Uncomment next 5 lines for full-sized, centered image.*/  
/*    background: url('/assets/img/logo/bradford150ht.png') no-repeat bottom left fixed;*/
/*    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover; */
    /*background-size: cover;*/
	}

	#push, #footer{
		height:80px;
	}
</style>
		
		@section('styles')

		@stop
		

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
	</head>

	<body>

		<!-- To make sticky footer need to wrap in a div -->
		<div id="wrap">
		<!-- Navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					menu
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<h2>Client Services</h2>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>

							<li {{ (Request::is('/surls') ? ' class="active"' : '') }}><a href="{{{ URL::to('/surls') }}}">Surls</a></li>

							<li {{ (Request::is('/photos') ? ' class="active"' : '') }}><a href="{{{ URL::to('/photos') }}}">Photos</a></li>

							<li {{ (Request::is('/demo') ? ' class="active"' : '') }}><a href="{{{ URL::to('/demo') }}}">Demo</a></li>

						</ul>

                        <ul class="nav pull-right">

                            @if (Auth::check())
                            <li><a href="{{{ URL::to('user/settings') }}}">Logged in as {{{ Auth::user()->username }}}</a></li>
                            <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
                            @else
                            <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li>
                            <li {{ (Request::is('user/register') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">Sign Up</a></li>
                            @endif
                        </ul>
					</div>
					<!-- ./ nav-collapse -->
				</div>
			</div>
		</div>
		<!-- ./ navbar -->

		<!-- Container -->
		<div class="container">
			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->

			<!-- Content -->
			
			<h6>view->site->layouts->default</h6>

			@yield('content')

			

			<!-- ./ content -->
		</div>
		<!-- ./ container -->

		<!-- the following div is needed to make a sticky footer -->
		<div id="push"></div>
		</div>
		<!-- ./wrap -->


	    <div id="footer">
	      <div class="container">

	      	<img src="/assets/img/logo/bradford150ht.png" alt="">
<!-- 	        <p class="muted credit">Laravel 4 Starter Site on <a href="https://github.com/andrew13/Laravel-4-Bootstrap-Starter-Site">Github</a>.</p> -->
	      </div>
	    </div>

		<!-- Javascripts
		================================================== -->
        {{ Basset::show('public-js.js') }}
	</body>
</html>
