<!DOCTYPE html>
<html lang="en">

@include('partials/head')

<body>
@yield('mystyle')

		<!-- To make sticky footer need to wrap in a div -->
<div id="wrap">

	@include('partials/nav')
<div class="visible-desktop spacer" style="margin-top:160px;"></div>
		<!-- ./ navbar -->

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
		
		
</div>
		<!-- ./wrap -->
<div id="push"></div>

@include('partials.footer')
