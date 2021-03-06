<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inside Car Connection</title>
    <!-- Basic favicons -->
	<link rel="shortcut icon" sizes="16x16 32x32 48x48 64x64" href="/favicon.ico">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<!--[if IE]><link rel="shortcut icon" href="/favicon.ico"><![endif]-->
	<!-- For Opera Speed Dial -->
	<link rel="icon" type="image/png" sizes="195x195" href="/favicon-195.png">
	<!-- For iPad with high-resolution Retina Display running iOS ≥ 7 -->
	<link rel="apple-touch-icon" sizes="152x152" href="/favicon-152.png">
	<!-- For iPad with high-resolution Retina Display running iOS ≤ 6 -->
	<link rel="apple-touch-icon" sizes="144x144" href="/favicon-144.png">
	<!-- For iPhone with high-resolution Retina Display running iOS ≥ 7 -->
	<link rel="apple-touch-icon" sizes="120x120" href="/favicon-120.png">
	<!-- For iPhone with high-resolution Retina Display running iOS ≤ 6 -->
	<link rel="apple-touch-icon" sizes="114x114" href="/favicon-114.png">
	<!-- For Google TV devices -->
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96.png">
	<!-- For iPad Mini -->
	<link rel="apple-touch-icon" sizes="76x76" href="/favicon-76.png">
	<!-- For first- and second-generation iPad -->
	<link rel="apple-touch-icon" sizes="72x72" href="/favicon-72.png">
	<!-- For non-Retina iPhone, iPod Touch and Android 2.1+ devices -->
	<link rel="apple-touch-icon" href="favicon-57.png">
	<!-- Windows 8 Tiles -->
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="/favicon-144.png">
    <script type="text/javascript" src="//use.typekit.net/pie0jmd.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <link rel="stylesheet" href="css/app.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>
  <header id="header">
    <div class="row">
      <div class="small-10 medium-6 large-6 small-centered columns" id="logo">
        <p><img src="img/inside-car-connection.svg" alt="Inside Car Connection" /></p>
        <p id="tagline">The best way to get the best deals on today's most desirable cars.</p>
      </div>
    </div>
  </header>
  <div id="why-icc">
    <div class="row">
      <div class="large-12 columns">
        @if (Session::has('message'))
          <div data-alert class="alert-box success radius">
            {{ Session::get('message') }}
            <a href="#" class="close">&times;</a>
          </div>
        @endif
        <h1 class="section-title">Why Inside Car Connection?</h1>
      </div>
    </div>
    <div class="row" id="intro-text">
      <div class="large-11 columns small-centered text-center">
        <p class=""><b>Two reasons. TIME &amp; MONEY.</b></p>
        <p>Are you in the market for a high demand/low supply vehicle? If so, you will have limited choices in terms of color and options, unless you are willing to wait months for a factory order. You will also have NO leverage in negotiating a "deal" because your local dealer will have more buyers than vehicles.</p>
        
        <p>If you spent countless hours contacting hundreds of dealers, the odds of finding the ideal car would go up dramatically. If you had decades of experience in auto sales, working every position from sales associate to General Sales Manager and acquiring hundreds of dealer contacts along the way, the odds of finding a "deal" would also go up dramatically.</p>

        <p>ICC has already done the heavy lifting for you and we have the experience needed to find the perfect car at a great price. Take advantage of our tireless effort and vast expertise.</p>
        <p>ICC will save you time. ICC will save you money.</p>
      </div>
    </div>
  </div>
  <div id="cars">
    <div class="row">
      <div class="large-8 large-centered columns">


        @yield('content')


      </div>
    </div>
  </div>
  <footer id="footer">
    <div class="row">
      <div class="large-6 columns">
        <div class="row">
          <div class="large-12 columns">
            <h2 class="section-title">Contact Information</h2>
          </div>
        </div>
        <div class="contact-info">
          <h2>Inside Car Connection</h2>
          <p>(855) 559-6924 toll free</p>
          <p>info@insidecarconnection.com</p>
        </div>
        <div class="contact-info">
          <h4>Nationwide delivery available.</h4>
        </div>
      </div>
      <div class="large-6 columns">
        <div class="row">
          <div class="large-12 columns">
            <h2 class="section-title">Contact Form</h2>
          </div>
        </div>
        <div id="contact-form">

          <?php echo View::make('contactform') ?>


        </div>
      </div>

    </div>
  </footer>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>