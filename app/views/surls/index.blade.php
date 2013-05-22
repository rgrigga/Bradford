@section('content')



	<div class="span6">
		<h2 class='text-center'>Keep it Short</h2>

		<div class="text-center">
		{{ Form::open(array('url' => 'surls', 'class'=>'form-inline'))}}
		{{ Form::token() }}
		{{ Form::text('url', 'http://', array('autocomplete' => 'off' ))}}
		{{ Form::submit('Shorten')}}
		{{ Form::close() }}
		</div>

		{{$errors->first('url', '<p class="error">:message</p>')}}
	</div>
	<div class="span3">


	<!-- </div> -->
	</div>

@stop


@section('tweetstream')
	<h3>Read Stuff</h3>
	<a class="twitter-timeline"  href="https://twitter.com/ryangrissinger"  data-widget-id="330243075756658691">Favorite Tweets by @ryangrissinger</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
@stop

@section('tweet_buttons')

<!-- tweet to @ryangrissinger -->
	<a href="https://twitter.com/intent/tweet?screen_name=ryangrissinger&text=foo%20bar" class="twitter-mention-button" data-size="large" data-related="ryangrissinger">Tweet to @ryangrissinger</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


<!-- tweet #foobar -->
	<a href="https://twitter.com/intent/tweet?button_hashtag=foobar" class="twitter-hashtag-button" data-size="large" data-related="ryangrissinger">Tweet #foobar</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
 
@stop