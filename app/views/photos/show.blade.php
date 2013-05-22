@section('content')

<h2>
	{{ $photo->caption }}
</h2>

<img src="/assets/{{ $photo->path}}" alt="{{$photo->caption}}">

@stop