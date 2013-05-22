@section('content')
	<h1>Here is your short url:</h1>
    {{ HTML::link("surl/".$surl, "surl/$surl") }}
	
	<h2>
	{{ $surl->url }}
    </h2>

    <p>You can now use that instead of<p>
    <p><? echo $surl; ?></p>
    



    {{ HTML::image("img/thinker_head_square.png", "thinker") }}
@endsection