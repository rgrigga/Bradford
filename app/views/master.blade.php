<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>URL Shortener</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
	<style type="text/css">
		body { padding-top: 60px; padding-bottom: 40px; }
	</style>
	<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/style.css" class="style">

	<!-- rgrigga style -->
	<link href='http://fonts.googleapis.com/css?family=Quando|Kavoon' rel='stylesheet' type='text/css'>



	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/images/apple-touch-icon-114x114.png">
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">View.Master.Blade</a>
				<div class="nav-collapse">
					<ul class="nav">
							<li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>

							<li {{ (Request::is('/surl') ? ' class="active"' : '') }}><a href="{{{ URL::to('/surl') }}}">Surl</a></li>

							<li {{ (Request::is('/photos') ? ' class="active"' : '') }}><a href="{{{ URL::to('/photos') }}}">Photo</a></li>

							<li {{ (Request::is('/demo') ? ' class="active"' : '') }}><a href="{{{ URL::to('/demo') }}}">Demo</a></li>

							<li {{ (Request::is('/contact-us') ? ' class="active"' : '') }}><a href="{{{ URL::to('/contact-us') }}}">About</a></li>
					</ul>
			                       
			                        <ul class="nav pull-right">
			                            @if (Auth::check())
			                            <li><a href="{{{ URL::to('user/settings') }}}">Hello, {{{ Auth::user()->username }}}</a></li>
			                            <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
			                            @else
			                            <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Clients</a></li>
			                            <li {{ (Request::is('user/register') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">Register</a></li>
			                            @endif
			                        </ul>
					
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<div class="container">
		<!-- Main hero unit for a primary marketing message or call to action -->
		
		@include('partials/contact')

		<div class="hero-unit">
			@yield('content')

			   
			<p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
		</div>
		<!-- Example row of columns -->
		<div class="row">
			<div class="span4">
				<h2>Photos</h2>
				
				
				<p><a class="btn" href="#">View details &raquo;</a></p>
			</div>
			<div class="span4">
				<h2>Heading</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn" href="#">View details &raquo;</a></p>
			</div>
			<div class="span4">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, dolore reprehenderit eveniet fugit cum voluptates iure maiores in consequatur recusandae.</p>
				<p><a class="btn" href="#">View details &raquo;</a></p>
			</div>
		</div>

	  	<hr>

		<footer>
			<p>&copy; Company 2012</p>
		</footer>
	</div> <!-- /container -->

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="http://code.jquery.com/jquery.min.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-transition.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-alert.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-modal.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-dropdown.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-scrollspy.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-tab.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-tooltip.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-popover.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-button.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-collapse.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-carousel.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-typeahead.js"></script>
</body>
</html>