<!DOCTYPE html>



<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">
    <title>
    First time | Dashboard
</title>

    <link href='//fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700'
          rel='stylesheet' type='text/css'/>

    <link href="/static/js/jquery-ui-1.11.3/jquery-ui.min.css" rel="stylesheet"/>
    <link href="/static/css/bs/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/static/css/style.css" rel="stylesheet" />
    <link href="/static/css/dashboard.css" rel="stylesheet"/>
    <link href="/static/css/bootstrap-dialog.min.css" rel="stylesheet"/>
    <link rel="shortcut icon" type="image/x-icon" href="/static/images/favicon.ico"/>

    
<style>
 section:first-child {
   padding-top: 40px;
 }
 .ico-mail {
   background: url("/static/images/ico-envelope.png") no-repeat 0 0;
   width: 20px;
 }
 .alert.alert-support-contact {
   background-color: #FFF5D3;
   height: 80px;

   padding-top: 12px;
   padding-left: 20px;
 }
 .alert {
   padding: 10px;
 }
 .alert img {
   width: 46px;
   height: 46px;
   display: inline-block;
 }
 .alert .ico-envelope {
   width: 20px;
   height: 20px;
   margin-bottom: 4px;
 }
 .alert .col-md-* {
   padding: 0;
 }
 .alert span {
   display: inline-block;
   padding-top: 4px;
   padding-left: 5px;
   padding-right: 12px;
 }
 .alert .alert-info-text {
   font-size: 14px;
   color: #384343;
   padding: 2px;
 }
 .alert .alert-info-text-bold {
   font-weight: 600;
   font-size: 16px;

   color: #384343;
   margin-top: 10px;
 }
 .alert .alert-contact-name {
   font-weight: 600;
   font-size: 16px;
   color: #E18C44;

   padding-top: 10px;
 }
 .alert a {
   text-decoration: underline;

   font-size: 13px;
   color: #333333;
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
	              <a href="/team">
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
	              <a href="/leave/calendar">
		              <i class="ico ico-calendar"></i>
		              Leaves
	              </a>
              </li>

              <li class="">
	              <a href="/benefits">
                    <img src="/static/images/svg/benefits-icon-nav.svg">
		              Benefits
	              </a>
              </li>
              
              <li class="">
	              <a href="/benefits/insurance">
                    <img src="/static/images/svg/insurance-icon-nav.svg">
		                Insurance
	              </a>
              </li>
              
              <li class="">
	              <a href="/payroll">
                    <img src="/static/images/svg/payroll-icon.svg">
		                Payroll
	              </a>
              </li>
            </ul>
	          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		              Roylves
		              <span class="caret"></span>
	              </a>
	              <ul class="dropdown-menu" role="menu">
                  <li><a href="/password_forget">Reset password</a></li>
		              <li><a href="/logout">Log out</a></li>
	              </ul>
              </li>
            </ul>
	        </div>
        </nav><!-- /.nav -->
      </div><!-- /.container -->
    </header><!-- /.header -->

    <div class="wrapper">
      <main class="main">
        
    <div class="container dashboard-content">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-sm-12">
                <section>
                    <div class="section-head">
                        <h1 class="section-title">Welcome,
                            Roylves</h1>
                        <!-- /.section-title -->
                        <p>Registration is ready. Continue setting up your company.</p>
                    </div>

                    <section class="section-secondary">
                        <div class="section-body">
                            <div class="alert alert-warning alert-support-contact" role="alert">
                                <div class="row">
                                    <div class="col-md-4">
                                        <strong>We are happy to help!</strong>
                                        <p>If you face any issues, please call:</p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row vertical-center">
                                            <div class="col-md-4">
                                                <img src="/static/images/Nizam.png" alt="Nizam">
                                            </div>
                                            <div class="col-md-8">
                                                <strong>Nizam</strong>
                                                <br/>
                                                <a>+6017-2328197</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row vertical-center">
                                            <div class="col-md-4">
                                                <span class="round">
                                                    <img src="/static/images/Kenneth.png" alt="Kenneth">
                                                </span>
                                            </div>
                                            <div class="col-md-8">
                                                <strong>Kenneth</strong>
                                                <br/>
                                                <a>+6017-4947325</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <img src="/static/images/ico-envelope.png" alt="Email" class="ico-envelope">
                                        <p>
                                            <a href="mailto:support@kakitangan.com" class="link-email">E-mail us</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-set ">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="step-title">
                                            <strong>Step 1: Register your company</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        
                                            <img src="/static/images/done.png" class="pull-left"/>
                                        
                                    </div>
                                    <div class="col-md-7">
                                        Congratulations! You are on your way to a simple yet efficient leave management system for your company.
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <a class="btn btn-default" id="register">
                                            Register
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-set ">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="step-title">
                                            <strong>Step 2: Complete your own profile</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        
                                            <img src="/static/images/done.png" class="pull-left"/>
                                        
                                    </div>
                                    <div class="col-md-7">
                                            Fill up your details such as date of joining, gender, etc hence the leave calculation is correct for you. :-)
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <a href="/user/complete_profile" class="btn btn-default">
                                            Complete profile
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-set ">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="step-title">
                                            <strong>Step 3: Try out the different HR modules in the system!</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        
                                            <img src="/static/images/done.png" class="pull-left"/>
                                        
                                    </div>
                                    <div class="col-md-11 form-group-modules">
                                        <div class="row ">
                                            <div class="col-md-7">
                                                <p>
                                                    <strong>A)</strong> Calculating <strong>payroll</strong> and issuing pay slips is now a breeze. Pay only for what you need, from RM6/person. Try it for free now.
                                                </p>
                                            </div>
                                            <div class="col-md-offset-1 col-md-4 text-right">
                                                <a href="/payroll/calculator?first_time=1" target="_blank" onclick="return ClickTryModule(this);" class="btn  btn-done btn-default">
                                                    Payroll
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-7">
                                                <p>
                                                    <strong>B)</strong> An award-winning <strong>leave</strong> management platform, used by thousands of companies. Beautiful, mobile and free.
                                                </p>
                                            </div>
                                            <div class="col-md-offset-1 col-md-4 text-right">
                                                <a href="/leave/calendar?first_time=1" target="_blank" onclick="return ClickTryModule(this);" class="btn  btn-done   btn-default ">Leave</a>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-7">
                                                <p>
                                                    <strong>C)</strong>) The simple way to reward your staff. Purchase <strong>benefits</strong> including medical coverage, birthdays, anniversary gifts and more.
                                                </p>
                                            </div>
                                            <div class="col-md-offset-1 col-md-4     text-right">
                                                <a href="/benefits?first_time=1" target="_blank" onclick="return ClickTryModule(this);" class="btn   btn-default ">Benefits</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-set  todo ">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="step-title">
                                            <strong>Like what you see so far?</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-8">
                                        <p class="step-sub-paragraph">
                                            Start <strong>importing your staff members</strong> and <strong>setting up your platform</strong> according to your company’s policies.
                                        </p>

                                        <p class="step-sub-paragraph">
                                            Say goodbye to tedious admin processes, and hello to a more efficient way of doing HR. If you have any questions, our friendly support team is on standby to help you.
                                        </p>
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <a href="/dashboard?first_time=1" class="btn btn-default ">Let's Go</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
        </div>
    </div>

      </main><!-- /.main -->
      <div class="push"></div><!-- /.push -->
    </div>

    <style>
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

        <a href="/payroll/invite" class="btn btn-default">Invite your friends</a>

        
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
      
      <script type="text/javascript" src="/static/js/jquery-1.11.2.min.js"></script>
      <script type="text/javascript" src="/static/css/bs/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="/static/js/bootstrap-select.min.js"></script>
      <script type="text/javascript" src="/static/js/isotope.pkgd.min.js" ></script>
      <script type="text/javascript" src="/static/js/bootstrap-datepicker.min.js"></script>
      <script type="text/javascript" src="/static/js/functions.js"></script>
      <script type="text/javascript" src="/static/js/bootstrap-dialog.min.js"></script>
      <script type="text/javascript" src="/static/js/uservoice.js"></script>
      

      
    <script type="text/javascript">
        //checkbox: JQuery object of checkbox
        function CheckNextStepButtonStatus(checkbox) {
            if (checkbox.is(':checked')) {
                checkbox.parents('.form-set').next('.form-set').find('.btn').removeAttr('disabled');
            } else {
                checkbox.parents('.form-set').next('.form-set').find('.btn').attr('disabled', 'disabled');
            }
        }

        function ClickTryModule(e) {
            setTimeout(function() {
                window.location.reload();
            }, 3000);
           
           return true;
        }
        $(document).ready(function () {
            $('.todo img:first').attr('src', '/static/images/done-current.png');
            $('.todo .btn:first').removeClass('disabled');

            $('.form-set input[type="checkbox"]').change(function () {
                CheckNextStepButtonStatus($(this));
            });

            $('.form-set input[type="checkbox"]').each(function () {
                CheckNextStepButtonStatus($(this));
            });

            $('#sendinvite').click(function (e) {
                e.preventDefault();

                $.ajax({
                    "type": 'POST',
                    "url": '/leave/invite_all',
                    "data": {
                        'action': 'get_employee_count',
                        "csrfmiddlewaretoken": getCookie('csrftoken')
                    },
                    "success": function (response, textstatus, jqXHR) {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_DEFAULT,
                            title: 'Inviting the users',
                            message: 'We are going to send ' + response + ' invitation mails to your employees. Look forward for them to start using the leave application system!',
                            buttons: [
                                {
                                    label: 'Cancel',
                                    action: function (dialogRef) {
                                        dialogRef.close();
                                    }
                                }, {
                                    label: 'Send',
                                    css: 'btn-primary',
                                    action: function (dialogRef) {
                                        dialogRef.close();

                                        $.ajax({
                                            "type": 'POST',
                                            "url": '/leave/invite_all',
                                            "data": {
                                                'action': 'send_invitation',
                                                "csrfmiddlewaretoken": getCookie('csrftoken')
                                            },
                                            "success": function (response, textstatus, jqXHR) {
                                                BootstrapDialog.show({
                                                    type: BootstrapDialog.TYPE_DEFAULT,
                                                    title: 'Inviting the users',
                                                    message: ' Send invitations mails successfully!',
                                                    buttons: [
                                                        {
                                                            label: 'OK',
                                                            action: function (dialog) {
                                                                dialog.close();

                                                                $('#step_sendinvite').prop('checked', true);
                                                                window.location.href = '/dashboard';
                                                            }
                                                        }
                                                    ]
                                                });
                                            }
                                        });
                                    }
                                }
                            ]
                        });
                    }
                });
            });
        });
    </script>

  </body>
</html>