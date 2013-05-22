@section('content')
<ul class="photos">
    @foreach($photos as $photo)
		<li>
			<figure>


				<img src="/assets/{{ $photo->path }}" alt="{{ $photo->caption }}">
				<figcaption>
					<a href="{{ route('photos.show',
					['photos' => $photo->id])}}">
						{{ $photo->id }} {{ $photo->caption }}
					</a>

				</figcaption>
			</figure>
		</li>


		
    @endforeach
    
</ul>
@endsection