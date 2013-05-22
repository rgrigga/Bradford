{{ render('partials.header') }}
 
<div data-role="page">
 
@section('nav')

    @yield_section

@endsection

@section('title')
    MyApp
@endsection
 
<div data-role="content" class="content">
<h6>Content</h6>
    @yield('content')
</div>
 
</div>
 
{{ render('partials.footer') }}