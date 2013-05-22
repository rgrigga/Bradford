<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">
	<link href="/favicon.ico" rel="icon" type="image/x-icon"/> 
	<title>
		@section('title')
        MyApp
        @yield_section
	</title>

    {{Asset::container('bootstrapper')->styles()}}
    {{Asset::container('bootstrapper')->scripts()}}
<!--     {{ HTML::style('css/style.css') }}  -->

</head>
<body>

<div data-role="page" data-theme="a">
<div data-role="header" data-position="inline">
<h1>jQuery Mobile Twitter Bootstrap Theme</h1>
<div data-role="navbar">
<ul>
<a href="index.html" data-icon="home">Home</a>
<a href="buttons.html" data-icon="th-large">Buttons</a>
<a href="listviews.html" data-icon="list">Lists</a>
<a href="nav.html" data-icon="cogs" class="ui-btn-active">Nav</a>
<a href="forms.html" data-icon="file">Forms</a>
</ul>
</div>
</div>
<div data-role="content" data-theme="a">

<a href="https://github.com/commadelimited/jQuery-Mobile-Bootstrap-Theme" data-role="button" data-icon="star">Get the code</a>

<h2>Navigation</h2>

<div data-role="header" data-position="inline">
<a href="index.html" data-icon="remove" data-theme="c">Cancel</a>
<h1>Edit Contact</h1>
<a href="index.html" data-icon="check" data-theme="d">Save</a>
</div><br />

<div data-role="footer" class="ui-bar">
<a href="index.html" data-role="button" data-icon="plus">Add</a>
<a href="index.html" data-role="button" data-icon="arrow-up">Up</a>
<a href="index.html" data-role="button" data-icon="arrow-downown">Down</a>
</div><br />

<div data-role="footer" data-theme="f">
<div data-role="navbar">
<ul>
<li><a href="#" data-icon="play">Play</a></li>
<li><a href="#" data-icon="pause">Pause</a></li>
<li><a href="#" data-icon="stop">Stop</a></li>
</ul>
</div>
</div><br />

<div data-role="footer" data-theme="a">
<a href="index.html" data-role="button" data-icon="arrow-up" data-iconpos="right">left</a>
<a href="index.html" data-role="button" data-icon="arrow-right" data-iconpos="right">right</a>
<a href="index.html" data-role="button" data-icon="arrow-up" data-iconpos="right">up</a>
<a href="index.html" data-role="button" data-icon="arrow-down" data-iconpos="right">down</a>
</div>

<div data-role="footer" data-theme="b">
<a href="index.html" data-role="button" data-icon="arrow-up" data-iconpos="right">left</a>
<a href="index.html" data-role="button" data-icon="arrow-right" data-iconpos="right">right</a>
<a href="index.html" data-role="button" data-icon="arrow-up" data-iconpos="right">up</a>
<a href="index.html" data-role="button" data-icon="arrow-down" data-iconpos="right">down</a>
</div>

<div data-role="footer" data-theme="c">
<a href="index.html" data-role="button" data-icon="arrow-up" data-iconpos="right">left</a>
<a href="index.html" data-role="button" data-icon="arrow-right" data-iconpos="right">right</a>
<a href="index.html" data-role="button" data-icon="arrow-up" data-iconpos="right">up</a>
<a href="index.html" data-role="button" data-icon="arrow-down" data-iconpos="right">down</a>
</div>

<div data-role="footer" data-theme="d">
<a href="index.html" data-role="button" data-icon="arrow-up" data-iconpos="right">left</a>
<a href="index.html" data-role="button" data-icon="arrow-right" data-iconpos="right">right</a>
<a href="index.html" data-role="button" data-icon="arrow-up" data-iconpos="right">up</a>
<a href="index.html" data-role="button" data-icon="arrow-down" data-iconpos="right">down</a>
</div>

<div data-role="footer" data-theme="e">
<a href="index.html" data-role="button" data-icon="arrow-up" data-iconpos="right">left</a>
<a href="index.html" data-role="button" data-icon="arrow-right" data-iconpos="right">right</a>
<a href="index.html" data-role="button" data-icon="arrow-up" data-iconpos="right">up</a>
<a href="index.html" data-role="button" data-icon="arrow-down" data-iconpos="right">down</a>
</div>

<div data-role="footer" data-theme="f">
<a href="index.html" data-role="button" data-icon="arrow-up" data-iconpos="right">left</a>
<a href="index.html" data-role="button" data-icon="arrow-right" data-iconpos="right">right</a>
<a href="index.html" data-role="button" data-icon="arrow-up" data-iconpos="right">up</a>
<a href="index.html" data-role="button" data-icon="arrow-down" data-iconpos="right">down</a>
</div>

</div>
</div>
</body></html>