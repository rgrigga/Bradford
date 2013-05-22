
		<!-- Navbar -->
<!-- <div class="navbar navbar-fixed-top"> -->
<div class="navbar navbar-inverse navbar-fixed-top">


	<div class="navbar-inner bradford">
		
		<div class="container">
		<!-- <h1 class="company">Bradford</h1> -->

		
<div class="hidden-desktop pull-left"><img src="/assets/img/logo/bradford32ht.png" alt=""></div>


			<a class="btn btn-navbar pull-right" data-toggle="collapse" data-target=".nav-collapse">

				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

@include('partials/contact')
		<div class="nav-collapse collapse">

		<img  src="/assets/img/logo/bradford5_150ht.png" alt="">
		
		<ul class="nav">
		<li>
			<form class="navbar-search pull-right">
			    <input type="text" class="search-query" placeholder="Search for anything">
			    </form>
		</li>

		<li class="dropdown">

			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Links<b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li class="nav-header">
					Tools
				</li>
				<li>
					<a href="http://www.grouptweet.com/premium">GroupTweet</a>
				</li>
				<li>
					<a href="#">Another action</a>
				</li>
				<li>
					<a href="#">Something else here</a>
				</li>
	<!-- Learn -->
				<li class="divider">
				</li>
				<li class="nav-header">
					Learn Something
				</li>
				<li>
					<a href="#">Separated link</a>
				</li>
				<li>
					<a href="#">One more separated link</a>
				</li>
	<!-- Mail -->
				<li class="divider">
				</li>

				<li class="nav-header">
					Mail
				</li>
				<li>
					<a href="http://gmail.com">Gmail</a>
				</li>
				<li>
					<a href="http://yahoo.com/mail">Ymail</a>
				</li>
				
					<li {{ (Request::is('/demo') ? ' class="active"' : '') }}><a href="{{{ URL::to('/demo') }}}">DemoMain</a></li>

					<li {{ (Request::is('/surl') ? ' class="active"' : '') }}><a href="{{{ URL::to('/surl') }}}">DemoSurl</a></li>
					
					<li {{ (Request::is('/photos') ? ' class="active"' : '') }}><a href="{{{ URL::to('/photos') }}}">News</a></li>

			</ul>
		</li>


					<li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>



					<li {{ (Request::is('services') ? ' class="active"' : '') }}><a href="{{{ URL::to('/services') }}}">Services</a></li>

					<li {{ (Request::is('about') ? ' class="active"' : '') }}><a href="{{{ URL::to('/about') }}}">About</a></li>



<!-- 					<li {{ (Request::is('/about') ? ' class="active"' : '') }}><a href="{{{ URL::to('/#about') }}}">Home#About</a></li> -->



				</ul>

				<ul class="nav pull-right">
                    @if (Auth::check())
                    <li><a href="{{{ URL::to('user/settings') }}}">Hello, {{{ Auth::user()->username }}}!</a></li>
                    <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
                    @else
                    <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Clients</a></li>
                    <li {{ (Request::is('user/register') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">Register</a></li>
                    @endif
                </ul>

<!--                 <ul class="nav pull-right">
                	<li></li>
                    @if (Auth::check())
                    <li><a href="{{{ URL::to('user/settings') }}}">Logged in as {{{ Auth::user()->username }}}</a></li>
                    <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
                    @else
                    <li {{ (Request::is('user/register') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">Sign Up</a></li>
                    <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li>
                    
                    @endif
                </ul> -->
			</div>
			<!-- ./ nav-collapse -->

		</div>
	</div>
</div>


<!-- <div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="#">Bradford</a>

			<div class="nav-collapse">
				<ul class="nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
					
					<li class="active">
						<a href="#">Demo</a>
					</li>
					<li>
						<a href="/surl">sURL</a>
					</li>
					<li>
						<a href="/calc">Calc</a>
					</li>


				</ul>
			</div>

		</div>
	</div>
</div> -->




