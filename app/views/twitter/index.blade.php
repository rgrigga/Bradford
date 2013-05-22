@section('tweetstream')
	<h3>Read Stuff</h3>

<!-- //paste twitter stuff here -->

	<a class="twitter-timeline"  href="https://twitter.com/ryangrissinger"  data-widget-id="330243075756658691">Favorite Tweets by @ryangrissinger</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
@endsection

@section('tweet_buttons')

<!-- tweet to @ryangrissinger -->
	<a href="https://twitter.com/intent/tweet?screen_name=ryangrissinger&text=foo%20bar" class="twitter-mention-button" data-size="large" data-related="ryangrissinger">Tweet to @ryangrissinger</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


<!-- tweet #foobar -->
	<a href="https://twitter.com/intent/tweet?button_hashtag=foobar" class="twitter-hashtag-button" data-size="large" data-related="ryangrissinger">Tweet #foobar</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

@endsection