@section('content')
{{ Form::model($surl)}}

{{ Form::label('surl', 'Your short url:') }}
{{ Form::text('surl')}}


{{Form::close()}}
@stop