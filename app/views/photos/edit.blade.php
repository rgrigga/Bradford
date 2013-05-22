

@section('content')
{{ Form::model($photo)}}

{{ Form::label('photo', 'Your Photo:') }}
{{ Form::text('img')}}

<img src="/assets/{{ $photo->path}}" alt="{{$photo->caption}}">

{{Form::close()}}

{{Form::file('photo')}}

<!-- <div id="upload-area">
	<div id="preview">
		<img width="100px" height="100px" src="img/icon/button_grey_add.png" id="thumb">
	</div>

	<form action="/playground/ajax_upload" id="newHotnessForm">
		<label>Upload a Picture of Yourself</label>
		<input type="file" size="20" id="imageUpload" class="input">
		<button class="button" type="submit">Save</button>
	</form>
</div>
<hr> -->


@stop
