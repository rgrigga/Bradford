
<style>
/*hint: it is the padding on p doing this, causes bootstrap to -20 the footer, i think. */
	#footer{

		text-align: center;
		height:200px;
		background-color: black;
		color:white;
	}

</style>

	    <div id="footer">
	      <div class="container">

	        	<!-- : Based on Laravel 4 Starter Site on <a href="https://github.com/andrew13/Laravel-4-Bootstrap-Starter-Site">Github</a>.</p> -->

<!-- 	        <div class="navbar">
		      	<div class="navbar-inner">			
		      		<ul class="nav muted">

		      			
						<li> &copy; 2013 </li>
						<li> Bradford Insurance Group</li>
						<li>
							web design & responsive web app devlopment provided by:
						</li>
						<li>
							<a href="http://www.gristech.com/demo">
							Learn about it <img class="footer" src="http://www.gristech.com/img/thinker/thinker_head_circle_large2.png" alt="Think About It"> Think about it
						</a>  
						</li>
						<li><a href="license">-Licensing Info-</a></li>
					</ul>
				</div>
	       </div> -->



<p class="muted credit">
	&copy; 2013
</p>
<p>
	 Bradford Insurance Group
</p>
<p>
	<a href="http://www.gristech.com/demo">
	 Learn about it <img class="footer" src="http://www.gristech.com/img/thinker/thinker_head_circle_large2.png" alt="Think About It">
	 Think about it</a>
</p>
<p>
	- <a href="license">Licensing Info</a> - 
</p>
     </div>
<!-- container -->
	    </div>

		<!-- Javascripts
		================================================== -->
        {{ Basset::show('public-js.js') }}

<!-- google analytics script -->
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41346911-1', 'gristech.com');
  ga('send', 'pageview');

</script>


	</body>
</html>