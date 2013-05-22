<!doctype html>
<html>
  
  <head>
    <title>tips</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<!--     <link rel="stylesheet" href="https://app.divshot.com/css/bootstrap.css">
    <link rel="stylesheet" href="https://app.divshot.com/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="https://djyhxgczejc94.cloudfront.net/builds/80037b02082b29f5f9cea127cab2a4ba4365ec67.css">
    <script src="https://app.divshot.com/js/jquery.min.js"></script>
    <script src="https://app.divshot.com/js/bootstrap.min.js"></script>
 -->




    <!-- {{ Basset::show('public-css.css') }} -->
    {{ Basset::show('public-js.js') }}

    <link href="//netdna.bootstrapcdn.com/bootswatch/2.3.1/readable/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/blogcss.css" rel="stylesheet">

  </head>
  
  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="/">layouts/blog</a>
          <div class="navbar-content">
            <ul class="nav ">

<!--               <li class="active"><a href="#">Home</a></li>
              <li><a href="#">About</a></li> -->
              <li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>

              <li {{ (Request::is('/surls') ? ' class="active"' : '') }}><a href="{{{ URL::to('/surl') }}}">Surl</a></li>

              <li {{ (Request::is('/photos') ? ' class="active"' : '') }}><a href="{{{ URL::to('/photos') }}}">Photos</a></li>

              <li {{ (Request::is('/demo') ? ' class="active"' : '') }}><a href="{{{ URL::to('/demo') }}}">Demo</a></li>

            </ul>
                                          <ul class="nav pull-right">
                                  @if (Auth::check())
                                  <li><a href="{{{ URL::to('user/settings') }}}">Logged in as {{{ Auth::user()->username }}}</a></li>
                                  <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
                                  @else
                                  <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li>
                                  <li {{ (Request::is('user/register') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">Sign Up</a></li>
                                  @endif
                              </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="hero-unit hidden-phone">
        <h1>Welcome to Your App!</h1>
        <p>We do amazing things that will make you want to give us money. Lots of
          money.</p>

        <p>
          <a class="btn btn-large btn-inverse" href="#"><span class="btn-label">Sign Up Today!</span></a> 
        </p>
      </div>
      <a class="btn btn-large btn-primary btn-block visible-phone" href="#"><span class="btn-label">Sign Up Today!</span></a>
      <div class="row">
        <div class="span12">@yield('content')</div>
      </div>
      <div class="row main-features">
        <div class="span4">
          <div class="well">
            <h3>Awesome Feature #1</h3>
            <p>A well-thought-out site outline includes:

Content. The key to a successful site is content. Give site visitors lots of interesting information, incentives to visit and buy, and ways to contact you. Once your site is up and running, continually update and add fresh content to keep people coming back.

Structure. Decide how many pages to have and how they'll be linked to each other. Choose graphics and icons that enhance the content.

Design. With the content and structure in place, site design comes next. Whether you're using an outside designer or doing it yourself, concentrate on simplicity, readability and consistency. Remember to focus on what you want to accomplish.

Navigation. Make it easy and enjoyable for visitors to browse the site. For example, use no more than two or three links to major areas and never leave visitors at a dead end.

Credibility. This is an issue that shouldn't be lost in the bells and whistles of establishing a website. Your site should reach out to every visitor, telling that person why he or she should buy your product or your service. It should look very professional, and give potential customers the same feeling of confidence they would get with a phone call or face-to-face visit with you. Remind visitors that you don't exist only in cyberspace. Your company's full contact information -- company name, complete address, telephone, fax and e-mail -- should appear on all or most of your individual web pages and be displayed prominently on your site's home page.

An outline helps you get the most out of your website design/e-commerce budget. It will also help you determine whether you, or someone in your company, can design portions of the website, or if you need to solicit outside help. That way, when you hire someone, it will be for only the parts of the job that you'll need to have outsourced.

Read more: http://www.entrepreneur.com/article/225961#ixzz2StHzUwFr
</p>
            <a class="btn btn-primary" href="#"><span class="btn-label">Find Out More</span></a> 
          </div>
        </div>
        <div class="span4">
          <div class="well">
            <h3>Awesome Feature #2</h3>
            <p>Enter a brief description of why it's so awesome here. Then move on to
              the next feature.</p>
            <a class="btn btn-info" href="#"><span class="btn-label">Find Out More</span></a> 
          </div>
        </div>
        <div class="span4">
          <div class="well">
            <h3>Awesome Feature #3</h3>
            <p>Enter a brief description of why it's so awesome here. Then move on to
              the next feature.</p>
            <a class="btn btn-success" href="#"><span class="btn-label">Find Out More</span></a> 
          </div>
        </div>
      </div>
    </div>
  </body>

</html>