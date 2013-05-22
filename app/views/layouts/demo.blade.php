<!DOCTYPE html>
<html lang="en">
<!-- <div data-role="header"> -->
	@include('partials.head')
	@yield('mystyle')
<!-- </div> -->
<body>
	<!-- About data-role:
	http://stackoverflow.com/questions/11456000/mobile-web-app-header-vs-div-data-role-header-what-is-the-difference -->
    <!-- <div data-role="header"> -->
    	
        <!-- <h1>@yield('title') Demo </h1> -->
    <!-- </div> -->
	

			<!-- To make sticky footer need to wrap in a div -->

<div id="wrap" data-role="page">

	@include('partials/nav')
		
	<div class="visible-desktop spacer" style="margin-top:160px;"></div>

	<!-- Container -->
	<div class="container">
		<div data-role="content">
			<!-- Notifications -->
			@include('notifications')
		    
		    @yield('content')       
		</div>

	</div>
	<!-- ./ container -->

				
</div>
<!-- ./wrap -->
<!-- the following div is needed to make a sticky footer -->
<div id="push"></div>

@include('partials.footer')