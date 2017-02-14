<!DOCTYPE html>
<html>
  
  
<!-- Mirrored from kakitangan.com/landing/about by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2017 10:36:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Meta tags
  ================================================== -->
    <meta charset="utf-8">
    <meta name="description" content="Kakitangan.com is free online HR Software that gives your team a single place to manage all your human resource needs - payroll, medical benefits, leave, compliance and more">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Site title
  ================================================== -->
    <title>Kakitangan.com: Online HR Software | Leave | Payroll | Benefits - All-In-One</title>
    <!-- Styles
  ================================================== -->
    <link rel="stylesheet" href="/static/lp/css/build.min.css">
    <link rel="stylesheet" href="/static/css/price_slider.css">
    <link rel="stylesheet" href="/static/css/uservoice.css">
    <style>
      .btn-feedback { font-size: 0; line-height: 0; text-indent: -4000px; width: 45px; height: 201px; display: block; position: fixed; bottom: 20px; right: 0; background: url(/static/images/btn-feedback.png) no-repeat 0 0; z-index: 10; }

      @media (max-width: 767px) {
          .btn-feedback { display: none; }
      }
    </style>
    <!-- Favicons + Touch Icons
  ================================================== -->
    <link rel="icon" href="/static/lp/img/favicons/favicon.html" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="76x76" href="/static/lp/img/favicons/apple-touch-icon-76x76.html">
    <link rel="apple-touch-icon" sizes="120x120" href="/static/lp/img/favicons/apple-touch-icon-120x120.html">
    <link rel="apple-touch-icon" sizes="152x152" href="/static/lp/img/favicons/apple-touch-icon-152x152.html">
  </head>
  <body>
    <!-- Google Tag Manager -->
<noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-KF6MFZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KF6MFZ');</script>
<!-- End Google Tag Manager -->

    <div class="wrapper">
      <!-- Header
  ================================================== -->
      <header class="header">
        <div class="container">
          <!-- <a href="#" class="logo"><img src="img/laoyut/logo.svg" alt=""></a> -->
          <div class="main_menu">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <!-- <a class="navbar-brand" href="#">Brand</a> -->
                  <a href="/" class="logo"><img src="/static/lp/img/layout/logo.svg" alt=""></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown dropdown_opened_mob">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OUR PLATFORM</a>
                      <ul class="dropdown-menu">
                        <li><a href="hr.html">FREE HR SYSTEM</a></li>
                        <li><a href="payrolle42d.html?version=1">PREMIUM PAYROLL SYSTEM</a></li>
                      </ul>
                    </li>
                    <li class="active"><a href="/about">ABOUT</a></li>
                    <li class="active"><a href="http://blog.kakitangan.com/">Blog</a></li>

                         @if (Auth::guest())
                             <li><a href="login" class="header_link">LOG IN</a></li>
                             <li><a href="signup" class="btn btn_primary btn_sign">SIGN UP</a></li>

                           @else
                              <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  {{ Auth::user()->name }} <span class="caret"></span></a>

                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}"      method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        </form>
                                    </li>
                                  </ul>
                                </li>
                            @endif
                  </ul>
                </div>
                <!-- /.navbar-collapse -->
              </div>
              <!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </header>

      @yield('content')
      
      <!-- .content -->
    </div>
    <!-- .wrapper -->
    <!-- Footer
================================================== -->
    <p class="text-center">
      <a href="terms.html">Terms and conditions</a>
    </p>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-push-6 footer_links">
            <a href="mailto:support@kakitangan.com" class="soc_link">
              <i class="icon icon_email"></i>
            </a>
            <a href="http://on.fb.me/1e0ItmI" class="soc_link">
              <i class="icon icon_fb"></i>
            </a>
            <a href="http://linkd.in/1G5wv69" class="soc_link">
              <i class="icon icon_in"></i>
            </a>
          </div>
          <div class="col-sm-6 col-sm-pull-6 footer_copyright">
            <span class="copy_icon">&copy;</span> 2016 KAKITANGAN.COM
          </div>
        </div>
      </div>
    </footer>
    <!-- Outdated Browser Message
================================================== -->
    <div id="outdated">
      <h6>Your browser is out-of-date!</h6>
      <p>Update your browser to view this website correctly. <a id="btnUpdateBrowser" target="_blank" href="http://outdatedbrowser.com/">Update my browser now </a></p>
      <p class="last"><a href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p>
    </div>

    <a id="feedback" href="mailto:support@kakitangan.com" class="btn-feedback ">FeedBack And Support</a>

    <div class="mobile-buttons">
      <p>
        <a class="button" id="feedback-mobile" href="mailto:support@kakitangan.com">
          <span>FeedBack <br> and Support</span>
        </a>
      </p>
    </div>
    <!-- Javascript
================================================== -->
    <!-- Connecting jQuery library from CDN -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- If CDN unavailable - connect local copy of jQuery -->
    <script>
    window.jQuery || document.write('<script src="/static/lp/js/jquery/jquery.min.js"><\/script>')
    </script>
    <!-- Plugins goes here -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/8.3.0/nouislider.min.js"></script>
    <script src="/static/lp/js/build.min.js"></script>
    <script src="/static/js/price_slider.js"></script>
    <script src="/static/js/uservoice.js"></script>
    <!-- End Document
================================================== -->
  </body>

<!-- Mirrored from kakitangan.com/landing/about by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2017 10:36:45 GMT -->
</html>