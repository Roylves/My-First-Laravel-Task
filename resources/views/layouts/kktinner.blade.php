<!DOCTYPE html>



<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard | Kakitangan</title>

    <link href='//fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700'
          rel='stylesheet' type='text/css'/>

    <link href="/static/css/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
    <link href="/static/css/style.css" rel="stylesheet" />
    <link href="/static/css/dashboard.css" rel="stylesheet"/>
    <link href="/static/css/bootstrap-dialog.min.css" rel="stylesheet"/>
    <link rel="shortcut icon" type="image/x-icon" href="/static/images/favicon.ico"/>

<style>
 section:first-child {
   padding-top: 40px;
 }
 
 .form-set .form-group-modules .row {
   margin-top: 8px;
 }
 .form-set .step-sub-paragraph {
   margin-top: 8px;
 }
</style>

  </head>
  <body>
    <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KF6MFZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KF6MFZ');</script>
<!-- End Google Tag Manager -->

    <header class="header">
      <div class="container">
        <nav class="navbar navbar-static-top">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#header_menu" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
	          </button>
	          <a href="/" class="navbar-brand">
	            <img src="/static/images/logo.png" alt="kakitangan.com">
	          </a>
	        </div>
	        <div class="collapse navbar-collapse" id="header_menu">
            <ul class="nav navbar-nav">
              <li class="current">
	              <a href="/dashboard">
		              <i class="ico ico-dashboard"></i>
		              Dashboard
	              </a>
              </li>
              <li class="" id="header_menu_team">
	              <a href="#">
		              <i class="ico ico-users"></i>
		              Users
	              </a>
              </li>

              <li class=" hide">
	              <a href="#">
		              <i class="ico ico-company"></i>
		              Company
		              <span class="badge">12</span>
	              </a>
              </li>

              <li class="">
	              <a href="#">
		              <i class="ico ico-calendar"></i>
		              Leaves
	              </a>
              </li>

              <li class="">
	              <a href="#">
                    <img src="/static/images/svg/benefits-icon-nav.svg">
		              Benefits
	              </a>
              </li>
              
              <li class="">
	              <a href="#">
                    <img src="/static/images/svg/insurance-icon-nav.svg">
		                Insurance
	              </a>
              </li>
              
              <li class="">
	              <a href="#">
                    <img src="/static/images/svg/payroll-icon.svg">
		                Payroll
	              </a>
              </li>
            </ul>
	          <ul class="nav navbar-nav navbar-right">
              @if (Auth::guest())

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
        </nav><!-- /.nav -->
      </div><!-- /.container -->
    </header><!-- /.header -->

    <div class="wrapper">
      <main class="main">

      @yield('content')
      </main><!-- /.main -->
      <div class="push"></div><!-- /.push -->
    </div>

<style> /*For footer nav*/
 .navbar-refer {
   background-color: #5880D1;
   color: #FFF;
   padding-top: 12px;
   margin-top: 64px;
   border-radius: 0px;
   min-height: 58px;
 }

 .navbar-refer .btn {
   color:  #5880D1;
   margin-left: 20px;
   border-color: #FFF;
 }
</style>

<nav class="navbar navbar-fixed-bottom navbar-refer">
    <div class="container">
        For a limited time, share Kakitangan.com Payroll with friends,
        and get 2 bonus months for you both.

        <a href="#" class="btn btn-default">Invite your friends</a>

        
    </div>
</nav>


    <footer class="footer">
        <div class="container">
            <div class="container-inner">
	              <div class="footer-body">
	                  <p class="text-center">
	                      <a href="/landing/terms">
	                          Terms & Privacy
	                      </a>
	                  </p>
	              </div><!-- /.footer-body -->
            </div><!-- /.container-inner -->
        </div><!-- /.container -->
    </footer><!-- /.footer -->

      <!-- view_data.html will override this block because the js file order impacts the date control of table editor-->
      
      <script type="text/javascript" src="/static/css/bs/js/jquery-3.1.1.js"></script>
      <script type="text/javascript" src="/static/css/bs/js/jquery-3.1.1.min.js"></script>
      <!-- DataTables -->
      <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
      @stack('scripts')
      <!-- /Datatables -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="/static/js/isotope.pkgd.min.js" ></script>
      <script type="text/javascript" src="/static/js/bootstrap-datepicker.min.js"></script>
      <script type="text/javascript" src="/static/js/bootstrap-dialog.min.js"></script>
      <script type="text/javascript" src="/static/js/uservoice.js"></script>

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
      <!-- <script type="text/javascript" src="/js/laracrud.js"></script> -->

  </body>
</html>