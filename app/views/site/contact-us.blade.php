@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.contact_us') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')

<div class="container">
	<div class="span4">


<h2>
<strong>ContactUs.com</strong> is an end-to-end online marketing suite for businesses to better generate and manage leads generated out of their own web visitors
</h2>

<p>
A <strong>smarter "Contact Us"</strong> form, designed to generate your more leads from your existing website traffic
</p>

<p>
A powerful <strong>Lead System</strong> providing data and tools to convert more leads into new customers
</p>


<p>
Access to the <strong>tools and expertise</strong> of advanced online marketers, built for sales-driven small businesses
</p>
	<ul>
	<li>View actionable conversion analytics - visitors to form-view to form-completions</li>
	<li>Access lead disposition tracking and reporting</li>
	<li>Receive real-time lead notification of inbound leads</li>
	<li>Enable phone call tracking and click-to-call functionality</li>
	<li>Create automated email campaigns to nurture new inbound leads</li>
	</ul>



</div>
	<div class="span4">span4</div>
	<div class="span2">@yield('tweetstream')</div>
</div>



@stop
