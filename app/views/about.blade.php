@section('content')

<div class="span6 sunset hero-unit">
<!-- <div class="hero-unit"> -->
howdy!
</div>

<div class="span6">
   <h5>Views->about</h5>

<p>
Laravel provides an easy method of protecting your application from cross-site request forgeries. First, a random token is placed in your user's session. Don't sweat it, this is done automatically. Next, use the token method to generate a hidden form input field containing the random token on your form:

Adding The CSRF Token To A Form

echo Form::token();

Attaching The CSRF Filter To A Route

Route::post('profile', array('before' => 'csrf', function()
{
    //
}));

</p>
</div>
    
@stop