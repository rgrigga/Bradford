@section('mystyle')
<style>

/*html, body {*/
    /*background-color: "blue";*/
    /*max-width:100%;*/
    /*height: auto;*/
 /*Uncomment next 5 lines for full-sized, centered image.*/ 

/*    background: url('/assets/img/long/marysville.png') no-repeat bottom left fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover; */

/*}*/


/*http://css-tricks.com/how-to-resizeable-background-image/*/
/*#img.source-image {
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
}*/

/*#wrap{
    font-family: Oswald;
}*/

h1,h2{
    font-family: Oswald;
}

</style>
@stop


@section('content')



<div class="row">

<!-- Left Column -->
	<div class="span6">
		<h1 class="beta">About us:</h1>
		<p>
			Bradford Insurance Group provides insurance services for families and business in and around Marysville, Ohio and Columbus Ohio. 
		</p>
		<p>
			Founded in 2008 by Trent Bradford and Richard Jenkins, we provide our customers with over 40 years of combined insurance experience.  When it comes to advice, <em>we've got you covered.</em>
		</p>
		<p>
			Bradford Insurance Group offers our clients with a complete line of insurance products (auto, home, business, farm, life, health and many more products). 
		</p>	
	</div>
<!-- end left column -->


<!-- Right Column -->
	<div class="span6">
		<div class="well">
			<p>We are "People people", and we'd love to deal with you directly in person when possible.</p>
			<h3 class="beta">Stop By Anytime!</h3>
			<img src="http://maps.googleapis.com/maps/api/staticmap?center=517+E+5thSt,Marysville,Ohio&zoom=14&size=420x420&markers=color:blue%7Clabel:B%7C517+E+5th+marysville+OH&sensor=false" alt="517 E 5th St, Marysville, OH">
	    	<h3>Bradford Insurance Group</h3>
	    	<h4>517 E 5th St.</h4>
	    	<h4> 
	   		<a href="http://www.city-data.com/city/Marysville-Ohio.html">Marysville Ohio</a> 43050</h4>
   		</div>
	</div>
<!-- End Right Column -->

</div>
<!-- end row -->



<!-- blank row -->
<div class="row">

	<div class="span3">
		<img src="assets/img/contact-us.png" alt="">
	</div>
	<div class="span6">

	</div>
	<div class="span3">

	</div>
</div>
<!-- row -->

    


@stop