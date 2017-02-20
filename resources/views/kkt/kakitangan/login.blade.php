<!DOCTYPE html>



<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from kakitangan.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2017 10:36:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Kakitangan.com | Login </title>

    <link href="/static/js/jquery-ui-1.11.3/jquery-ui.min.css"  rel="stylesheet">
    <link href="/static/css/bs/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/css/bootstrapValidator.min.css" rel="stylesheet">
    <link href="/static/css/bootstrap-tokenfield.min.css" rel="stylesheet">
    <link href="/static/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/static/css/bootstrap-dialog.min.css" rel="stylesheet">
    <link href="/static/css/jvfloat.css" rel="stylesheet">
    <link href="/static/css/common.css" rel="stylesheet">
    <link href="/static/css/login.css" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="/static/images/favicon.ico"/>

    
<style>
  .panel-default { margin-top: 60px; }
  .fg-signup {margin-top: 10px;}

  form input[type="email"] {
  text-transform: lowercase;
  }
</style>

</head>
<body>
  <!-- Google Tag Manager -->
<noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-KF6MFZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KF6MFZ');</script>
<!-- End Google Tag Manager -->


  <div class="container-fluid">
    <nav class="navbar navbar-header">
      <div class="container">
        <a class="brand navbar-left" href="/KKT">
          <span class="brand-second">
	    KAKITANGAN.COM
	  </span>
        </a>
      </div>
    </nav>

    
<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4">
            <div class="panel panel-default">
	              <div class="panel-body">
	                  <form class="form-horizontal" action="https://kakitangan.com/login" method="post" id="login-form">
	                      <input type='hidden' name='csrfmiddlewaretoken' value='chebT4ra2L2eMBXJH7kHjARxZj4VrWSx' />

	                      <div class="form-group">
	                          <div class="col-sm-12">
	                              <p id="form-Title">Log in</p>

                                
                            </div>
                        </div>

	                      <div class="form-group row">
	                          <div class="col-sm-12">
  	                            <input name="username" type="email" class="form-control" placeholder="Email" required
		                                   value=""
		                            />
	                          </div>
	                      </div>

	                      <div class="form-group fg-password row">
	                          <div class="col-sm-12">
		                            <input name="password" type="password"
                                       class="form-control" placeholder="Password" required />
	                          </div>
	                      </div>

	                      <div class="form-group fg-password row">
	                          <div class="col-sm-12">
		                            <a href="password_forget.html">Forgot your password?</a>
	                          </div>
	                      </div>

	                      <div class="form-group row">
	                          <div class="col-sm-offset-3 col-sm-6">
		                            <button type="submit" class="btn btn-primary form-control">
                                    Log in
                                </button>
	                          </div>
	                      </div>

	                      <div class="fg-signup">
	                          <p>Don't have an account? <a href="signup.html">Sign up</a></p>
	                      </div>
	                      <input type="hidden" name="next" value="/redirect" />

	                      <div class="form-group fg-result">
	                          
	                          
	                          <p class="success_message">
		                            
	                          </p>
	                          
	                      </div>
	                  </form>
	              </div>
            </div>
        </div>
    </div>
</div>


    <nav class="navbar jumbotron-footer">
      <a href="landing/terms.html">Privacy &#38; Terms</a>
    </nav>
  </div>
</body>

<script src="/static/js/jquery-1.11.2.min.js"></script>
<script src="/static/js/jquery-ui-1.11.3/jquery-ui.min.js"></script>
<script src="/static/css/bs/js/bootstrap.min.js"></script>
<script src="/static/js/bootstrapValidator.min.js"></script>
<script src="/static/js/bootstrap-tokenfield.min.js"></script>
<script src="/static/js/bootstrap-select.min.js"></script>
<script src="/static/js/bootstrap-dialog.min.js"></script>
<script src="/static/js/jvfloat.min.js"></script>
<script src="/static/js/uservoice.js"></script>


<script type="text/javascript">
$(document).ready(function() {
  $('#login-form').bootstrapValidator({
    message: 'This value is not valid',
    container: 'popover',
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
      username: {
        validators: {
          emailAddress: {
            message: 'Please input a valid email address'
          }
        }
      },
      password: {
        validators: {
          notEmpty: {
            message: 'The password is required'
          }
        }
      }
    }
  });

  //$('.form-group input').jvFloat();
});
</script>






<!-- Mirrored from kakitangan.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2017 10:36:48 GMT -->
</html>
