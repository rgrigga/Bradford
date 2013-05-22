
@section('content')
<div class="navbar-wrapper">
	<div class="container">
		<div id="mynav" class="navbar navbar-inverse navbar-fluid">
			<div class="navbar-inner">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href="#">MyApp</a>
				 
				 @yield('partials.nav')

			</div>
		</div>
	</div>
</div>
<div id="myCarousel" class="carousel slide" data-pause="remove">
	<div class="carousel-inner">
		<div class="item active">
			<img src="img/columbus.jpg">
			<div class="container">
				<div class="carousel-caption">
					<h1>
						Your World at Your Command
					</h1>
					<br>
					<p class="lead">
						Share documents, pictures, and ideas using all of your favorite existing
						services, <em>but easier</em>.
						<br>
					</p>
					<p>
						<a class="btn btn-large btn-primary pull-right" href="#">Sign up today
						</a>
					</p>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="img/device-icons2.png">
			<div class="container">
				<div class="carousel-caption">
					<h1>
						Responsive and Compatible.
					</h1>
					<p class="lead">
						We've all seen websites that looked great 10 years ago, but smartphones and tablets have changed the game today.  Your website might need a facelift, and we can do that for you, <em>affordably</em>.
					</p>


					<a class="btn btn-large btn-primary pull-right" href="#">Revitalize »</a>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="img/hometown.jpg">
			<div class="container">
				<div class="carousel-caption">
					<h1>
						Time to play with the Big Boys.
					</h1>
					<p class="lead">
						The 10,000 foot goal of this project is to bring enterprise-quality technology to people and small businesses that could not otherwise afford large-scale, custom development project.  With this in mind, we aim to help small businesses, our communities, and you.
					</p>

					<a class="btn btn-large btn-primary pull-right" href="#">Browse gallery</a>
				</div>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
<div class="container marketing">
	<h2><i class="icon-2x icon-circle-arrow-down"></i>  Mad Features </h2>
	<div class="row">
		<div class="span4">
			<img class="img-circle" data-src="holder.js/140x140">
			<h3>
				Text/Chat/Email
				<!-- <hr> -->
			</h3>
			<p>
				Connect with individuals or groups.  Group, live chat, or long-term discussion via live, multi-stream twitter dashboard.
			</p>
			<ul>
				<li><i class="icon-2x icon-twitter"></i> Twitter</li>
				<li><i class="icon-2x icon-facebook"></i> Facebook</li>
				<li><i class="icon-2x icon-linkedin"></i> LinkedIn</li>
				<li><i class="icon-2x icon-google-plus"></i> Google</li>
			</ul>
			<p><a class="btn pull-right" href="#">Chat »</a></p>
			<!-- <hr> -->
			<hr>
		</div>
		<!-- /.span4 -->
		<div class="span4">
			<img class="img-circle" data-src="holder.js/140x140">
			<h3>
				File Sharing
				<!-- <hr> -->
			</h3>
			<p>
				Private & Secure cloud storage using any of your own existing services, or temporary sharing on our servers.
			</p>
			<ul>
				<li><i class="icon-2x icon-file-alt"></i> Google Docs</li>
				<li><i class="icon-2x icon-copy"></i> Dropbox</li>
				<li><i class="icon-2x icon-table"></i> SkyDrive</li>
				<li><i class="icon-2x icon-save"></i> Other Cloud Solutions</li>
			</ul>
			<p><a class="btn pull-right" href="#">Share »</a></p>
			<hr>
		</div>
		<!-- /.span4 -->
		<div class="span4">
			<img class="img-circle" data-src="holder.js/140x140">
			<h3>
				Education
				<!-- <hr> -->
			</h3>
			<p>
				We are committed to helping each other learn: end-users, owners/managers, and developers alike.
			</p>
			<ul>
				<li><i class="icon-2x icon-medkit"></i> Support</li>
				<li><i class="icon-2x icon-fullscreen"></i> Collaborate</li>
				<li><i class="icon-2x icon-link"></i> Connect</li>
				<li><i class="icon-2x icon-lightbulb"></i> Inspire</li>
			</ul>
			<p><a class="btn pull-right" href="#">Dev »</a></p>
			<hr>
		</div>
	</div>
	<hr class="featurette-divider">
	<div class="featurette">
		<img class="featurette-image pull-right" src="img/apple-touch-icon-144-precomposed.png">
		<h2 class="featurette-heading">
			Bootstrapped
			<span class="muted">Join the mobile revolution.</span>
		</h2>
		<p class="lead">
			This amazing Twitter Bootstrap framework makes pages beautified and compatible with any device or screen size. Learn more about responsive layout.
		</p>
	</div>
	<hr class="featurette-divider">
	<div class="featurette">
		<a href="http://laravel.com">
			<img class="featurette-image pull-left" src="img/laravel-l-slant.png">
		</a>
		<h2 class="featurette-heading">
			Built on Laravel. 
			<span class="muted"> Built by artisans.</span>
		</h2>
		<p class="lead">
			This ain't your grandma's framework.  If you've never heard of Laravel, you will.  If you thought you knew php, you don't.  If you're already on board, you know what we mean. MyApp (and the tools it was built upon) is engineered and maintained by a gracious community of profesisonals committed to something more.  
		</p>
		<!-- <a >Learn about Laravel</a> -->
		
	</div>
	<hr class="featurette-divider">
	<div class="featurette">
		<a href="http://twitter.github.io/bootstrap/">
			<img class="featurette-image pull-right" src="img/build-your-brand2.png">
		</a>
		<h2 class="featurette-heading">
			Built for you.
			<span class="muted"> What won't you do?</span>
		</h2>
		<p class="lead">
			We beleive your company's relationship with each precious customer is the lifeblood of your business.  By employing our technology, you will build a more consistent brand, stay in touch, and communicate better throughout your service cycle.  By Combining these elements, you : ., you can focus on doing it what you do you best.
		</p>
	</div>
	<hr class="featurette-divider">



	<footer>
		<p class="pull-right">
			<a href="#">Back to top</a>
		</p>
		<p>
			© 2013 Gristech
			 <!-- · -->
<!-- 			<a href="#">Privacy</a>
			·
			<a href="#">Terms</a> -->
		<a href='/'><img class="pull-right" src="img/pat_100.png"></a>
		<small>Did you know I'm utterly insane? </small>
		</p>

	</footer>
</div>
@endsection