<nav class="navbar top-nav  navbar-default">
    <div class="container">
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a target="_blank" href="https://www.facebook.com/orangesoft"><span class="text-social">Follow us on:</span></a></li>
          <li><a href="mailto:sale@os.my"><span class="text-social">sales@os.my</span></a></li>
          <li><a href="tel:+603-9054 8817"><span class="text-social">+603-9054 8817</span></a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
</nav>

@section('main-nav')
  <div class="container">
    <div class="row main-nav">
            <div class="col-sm-12" role="heading">
           <div class="col-xs-9 col-sm-3"> <div class="region region-header">
           <a class="logo navbar-btn pull-left" href="/" title="Home" rel="home">
           <img src="{{asset('imgs/logo_0.png')}}" alt="Home" />
           </a>
           </div>
           </div>
           <div class="col-xs-3 col-sm-9 push">
           <div class="navbar navbar-default container" id="navbar" role="banner">
           <div class="navbar-header">
           <button type="button" class="navbar-toggle toggle-menu menu-right push-body" data-toggle="collapse" data-target=".navbar-collapse">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           </button>
           </div>
           <div class="navbar-collapse collapse">
           <div class="region region-navigation-collapsible">
           <nav role="navigation" aria-labelledby="block-orange2016-main-menu-menu" id="block-orange2016-main-menu">
           <ul class="menu nav navbar-nav">
           <li>
           <a href="/" data-drupal-link-system-path="&lt;front&gt;" class="is-active">Home</a>
           </li>
           <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-target="#" data-toggle="dropdown">Our Services <span class="caret"></span></a>
           <ul class="menu dropdown-menu">
           <li>
           <a href="/web-design" data-drupal-link-system-path="node/27">Web Design</a>
           </li>
           <li>
           <a href="/web-maintenance" data-drupal-link-system-path="node/28">Web Maintenance</a>
           </li>
           <li>
           <a href="/drupalisation" data-drupal-link-system-path="node/40">PSD / HTML to Drupal</a>
           </li>
           <li>
           <a href="/real-estate-web-marketing-system" data-drupal-link-system-path="node/31">Real Estate Web Marketing System</a>
           </li>
           </ul>
           </li>
           <li>
           <a href="/portfolio" data-drupal-link-system-path="node/42">Portfolio</a>
           </li>
           <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-target="#" data-toggle="dropdown" id="dropdownMenuButton" aria-haspopup="true">About Us <span class="caret"></span></a>
           <ul class="menu dropdown-menu">
           <li>
           <a href="/about" data-drupal-link-system-path="node/25">Who We Are</a>
           </li>
           <li>
           <a href="/partner" data-drupal-link-system-path="node/41">Partner Programme</a>
           </li>
           <li>
           <a href="/the-orangesoft-start-up-partnership-program" data-drupal-link-system-path="node/43">Start-up Partnership Program</a>
           </li>
           <li>
           <a href="/join-orangesoft">Join Us</a>
           </li>
           </ul>
           </li>
           <li>
           <a href="/blog" data-drupal-link-system-path="blog">Blog</a>
           </li>
           <li>
           <a href="/contact" data-drupal-link-system-path="node/89">Contact Us</a>
           </li>
           </ul>
           </nav>
           </div>
           </div>
            </div>
           </div>
           </div>
           </div>
  </div>
@endsection
