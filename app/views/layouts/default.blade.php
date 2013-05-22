<!DOCTYPE html>
<html lang="en">

@include('partials/head')
<body>
		<!-- To make sticky footer need to wrap in a div -->
	<div id="wrap">
		@include('partials/nav')



		<!-- Container -->
		<div class="container">
			
			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->

			<!-- Content -->
			@yield('content')
			<!-- ./ content -->
		</div>
		

		<!-- ./ container -->

		<!-- the following div is needed to make a sticky footer -->
		<div id="push"></div>

		<!-- ./wrap -->
@include('partials.footer')
	</div>