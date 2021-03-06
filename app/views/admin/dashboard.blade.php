@extends('admin.layouts.default')

@section('content')

<h1>Current. Fresh. Sharable.</h1>

<img src="/assets/img/mobile/responsive.png" alt="responsive">

ADMIN DASHBOARD
<!-- <h2>tabbable navigation</h2>
<div class="tabbable">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#1" data-toggle="tab">Section 1</a></li>
		<li><a href="#2" data-toggle="tab">Section 2</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="1">
			<p>I'm in Section 1.</p>
		</div>
		<div class="tab-pane" id="2">
			<p>Howdy, I'm in Section 2.</p>
		</div>
	</div>
</div> -->


<h2>pagination</h2>

<div class="pagination">
	<ul>
		<li><a href="#">Prev</a></li>
		<li class="active">
			<a href="#">1</a>
		</li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">Next</a></li>
	</ul>
</div>

<h2>3 column grid</h2>

<div class="row">
	<div class="span4">Column 1</div>
	<div class="span4">Column 2</div>
	<div class="span4">Column 3</div>
</div>

<h2>Thumbnails</h2>

<ul class="thumbnails">
	<li class="span4">
		<a class="thumbnail" href="#">
<img src="/assets/img/mobile/responsive2.jpg" alt="">

		</a>
		<h3>It's all about Marketing.</h3>
		<p>Thumbnail areas like this can explain features and products.  They could also be used to display items for sale, or a catalogue of services.</p>
	</li>
	<li class="span4">

		<a class="thumbnail" href="#">
			<img src="/assets/img/meat.jpg" alt="Meat">
			<small>Image courtesy of Grant Cochrane / freedigitalphotos.net</small>

		</a>
		<h3>Fluid layout</h3>
		<p>Uses our new responsive, fluid grid system to create seamless liquid layout.</p>
	</li>
	<li class="span4">
		<a class="thumbnail" href="#">
			<img src="http://placehold.it/360x240" alt="">
		</a>
		<h3>Starter template</h3>
		<p>A barebones HTML document with all the Bootstrap CSS and javascript included.</p>
	</li>
</ul>


<h2>A form</h2>
<form class="form-horizontal">
	<fieldset>
		<legend>Controls Bootstrap supports</legend>
		<div class="control-group">
			<label class="control-label" for="input01">Text input</label>
			<div class="controls">
				<input type="text" class="input-xlarge" id="input01">
				<p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="optionsCheckbox">Checkbox</label>
			<div class="controls">
				<label class="checkbox">
					<input type="checkbox" id="optionsCheckbox" value="option1">
					Option one is this and that—be sure to include why it's great
				</label>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="select01">Select list</label>
			<div class="controls">
				<select id="select01">
					<option>something</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="multiSelect">Multicon-select</label>
			<div class="controls">
				<select multiple="multiple" id="multiSelect">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="fileInput">File input</label>
			<div class="controls">
				<input class="input-file" id="fileInput" type="file">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="textarea">Textarea</label>
			<div class="controls">
				<textarea class="input-xlarge" id="textarea" rows="3"></textarea>
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-primary">Save changes</button>
			<button class="btn">Cancel</button>
		</div>
	</fieldset>
</form>

<h2>Quote</h2>

<div class="quote">
<p>Shakespeare's Website
</p>
<p>
Tomorrow, and tomorrow, and tomorrow, creeps in this petty pace from
day to day,
to the last syllable of recorded time; and all our yesterdays have
lighted fools
the way to dusty death. Out, out, brief candle! Life's but a walking
shadow; a poor player,
that struts and frets his hour upon the stage and then is heard no
more. It is a tale
told by an idiot, full of sound and fury, signifying nothing.&nbsp;</p>
<p></p>
</div>


<h2>Hero unit</h2>
	<h2>Mobile</h2>
<div class="hero-unit">

	<div class="row-fluid">
		<div class="span6">
			<img src="/assets/img/mobile/responsive3.jpg" alt="">

		</div>
		<div class="span6">
	<p>It basically boils down to 3 different main categories, but there are 5 sizes of screens.  

	</p>
		</div>
	</div>



</div>

<div class="hero-unit">
<img src="/assets/img/mobile/responsive4.png" alt="">
<p></p>
<p>

	Woulnd't it be easier to design, maintain, edit, add-to, extend, and talk about one codebase rather than 3? (duh.)
</p>
<p>
	The old way is insane: It's expensive for the client and boring for the developer.
</p>


</div>
<div>
Google says:

http://support.google.com/adsense

How you can manage your ads settings

You can manage your ads settings with web-based tools and controls. Below are just a few of the tools, controls, and resources developed by Google and other organizations to help you do so:
Tools, controls, and resources 	What it is
Ads Settings 	A Google tool that lets you opt out of Google’s interest-based ads or edit the interests and demographics associated with your browser.
Security and privacy tools 	Google’s browser controls, plug-ins, and product features designed to help you protect your privacy. Choose from over a dozen.
+1 personalization 	Your Google accounts page where you choose whether Google may use your +1's and other profile information to personalize your content and ads on non-Google websites.
Privacy policy 	Google’s worldwide privacy policy.
</div>

<h2>Accordian</h2>

 <div class="accordion" id="accordion">
 	<div class="accordion-group">
 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
 				Collapsible Group Item #1
 			</a>
 		</div>
 		<div id="collapseOne" class="accordion-body collapse in">
 			<div class="accordion-inner">
 				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
 			</div>
 		</div>
 	</div>
 	<div class="accordion-group">
 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
 				Collapsible Group Item #2
 			</a>
 		</div>
 		<div id="collapseTwo" class="accordion-body collapse">
 			<div class="accordion-inner">
 				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
 			</div>
 		</div>
 	</div>
 	<div class="accordion-group">
 		<div class="accordion-heading">
 			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
 				Collapsible Group Item #3
 			</a>
 		</div>
 		<div id="collapseThree" class="accordion-body collapse">
 			<div class="accordion-inner">
 				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
 			</div>
 		</div>
 	</div>
 </div>


<div class="tabbable tabs-left">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#1" data-toggle="tab">Section 1</a></li>
		<li><a href="#2" data-toggle="tab">Section 2</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="1">
			<p>I'm in Section 1.</p>
		</div>
		<div class="tab-pane" id="2">
			<p>Howdy, I'm in Section 2.</p>
		</div>
	</div>
</div>


@stop


