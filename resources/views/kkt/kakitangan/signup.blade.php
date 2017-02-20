<!DOCTYPE html>



<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from kakitangan.com/signup by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2017 10:36:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Kakitangan.com | Sign up </title>

    <link href="static/js/jquery-ui-1.11.3/jquery-ui.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="static/css/bootstrapValidator.min.css" rel="stylesheet">
    <link href="static/css/bootstrap-tokenfield.min.css" rel="stylesheet">
    <link href="static/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="static/css/bootstrap-dialog.min.css" rel="stylesheet">
    <link href="static/css/jvfloat.css" rel="stylesheet">
    <link href="static/css/common.css" rel="stylesheet">
    <link href="static/css/login.css" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="static/images/favicon.ico"/>

    
<link rel="stylesheet" href="static/css/tokenfield-typeahead.css" />
<style>
  .panel-default { margin-top: 40px; margin-bottom: 0px;}

  .location-category {
    margin: 0 20px 5px 20px;
    padding: 3px 0;
    border-bottom: 1px solid #ccc;
  }

  .tt-menu {
    max-height: 250px;
    min-width: 180px;
    overflow-y: auto;
  }

  div.maybank-interests {
      background-color: #FFC900;
      margin-top: 10px;
  }

  div.maybank-interests a {
      color: #FFFFFF;
  }

  div.maybank-interests img {
    padding-top: 10px;
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
        <a class="brand navbar-left" href="index.html">
          <span class="brand-second">
      KAKITANGAN.COM
    </span>
        </a>
      </div>
    </nav>

    
<div class="container">
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" action="https://kakitangan.com/register" method="post" id="login-form">
            <input type='hidden' name='csrfmiddlewaretoken' value='chebT4ra2L2eMBXJH7kHjARxZj4VrWSx' />

            <div class="form-group">
              <p id="form-Title">Register company account</p>
            </div>

            <div class="join-team">
                <div class="form-group">
                    <div class="join-icon">
                        <img src="static/images/svg/join-icon.svg" alt="join-icon">
                    </div>
                    <div class="join-team_text">
                        <span>Joining the existing team?</span><br>
                        Ask your HR to invite you, instead of registering.
                    </div>
                </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-7">
                <input name="full_name" id="full_name" type="text" class="form-control" placeholder="Your Name" required />
              </div>
              <div class="col-sm-5">
                <input name="contact_number" id="contact_number" type="text" class="form-control" placeholder="Phone No." />
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <input name="email" id="email" type="email" class="form-control" placeholder="Email" required />
              </div>
            </div>

            <div class="form-group fg-password row">
              <div class="col-sm-6">
                <input name="password" id="password" type="password" class="form-control"
                       placeholder="Create password" required />
              </div>
              <div class="col-sm-6">
                <input name="confirm_password" id="confirm_password" class="form-control"
                       type="password" placeholder="Confirm password" data-validation-matches-match="password" />
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-7">
                <input name="company_name" id="company_name" type="text" class="form-control" placeholder="Company name" />
              </div>

              <div class="col-sm-5">
                <div class="ui-widget">
                  <span class="glyphicon glyphicon-user"></span>
                  <select id="company_size" name="company_size" class="form-control selectpicker" required>
                    <option selected>&lt;10</option>
                    <option>11-20</option>
                    <option>21-30</option>
                    <option>31-40</option>
                    <option>41-50</option>
                    <option>51-60</option>
                    <option>61-70</option>
                    <option>71-80</option>
                    <option>81-90</option>
                    <option>91-100</option>
                    <option>101-200</option>
                    <option>200+</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group fg-locations row">
              <div class="col-sm-12">
                <input type="text" class="form-control" id="locations" name="locations" placeholder="Select office locations" autocomplete="off"/>
              </div>
            </div>

            <div class="form-group row">
              <div class="g-recaptcha" data-sitekey="6LfE2w4TAAAAAFFX33AO31rUzcH1D7cqVwBwxQhl"></div>
            </div>

            <div class="form-group row">
              <div class="col-sm-12">
                <input id="agreement" type="checkbox" name="agreement" required>
                <span>I have read and agree to the <a href="landing/terms.html" target="_blank">Term & Privacy Policy</a></span>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div  class="col-sm-offset-3 col-sm-6">
                  <button id="btnCreateAccount" type="submit" class="btn btn-primary form-control">
                    Create account
                  </button>
                </div>
              </div>
              <div class="row row-sign-in">
                <div class="col-sm-12 text-center">
                  <p>I already have an account. <a href="login.html">Sign in</a></p>
                </div>
              </div>
            </div>

            <input type="hidden" name="campaign_id" value="" />
          </form>
        </div>
      </div>
      <div class="panel maybank-interests">
          <div class="panel-body">
              <div class="row">
                  <div class="col-md-5 text-center">
                      <img src="static/images/maybank.png" style="margin-top: 7px;"/>
                  </div>
                  <div class="col-md-7">
                      <input id="maybank_interests" type="checkbox" name="maybank_interests" />
                      <span><strong>Register your interest for <a href="static/maybank/maybank2u%20Biz_rev2.pdf" target="_blank">Maybank2u Biz</a>
                          and <a href="static/maybank/maybankAutoCredit_rev2.pdf" target="_blank">Maybank AutoCredit</a>, an online banking service and e-payment solution for SME Customers!</strong></span>
                  </div>
              </div>
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

<script src="static/js/jquery-1.11.2.min.js"></script>
<!-- <script src="static/js/jquery-ui-1.11.3/jquery-ui.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="static/js/bootstrapValidator.min.js"></script>
<script src="static/js/bootstrap-tokenfield.min.js"></script>
<script src="static/js/bootstrap-select.min.js"></script>
<script src="static/js/bootstrap-dialog.min.js"></script>
<script src="static/js/jvfloat.min.js"></script>
<script src="static/js/uservoice.js"></script>


<script type="text/javascript" src="static/js/typeahead.bundle.min.js"></script>
<script src='../www.google.com/recaptcha/api.js'></script>
<script type="text/javascript">
  var my_location_engine = new Bloodhound({
    local: [
           {value: 'Kuala Lumpur'},
           {value: 'Selangor'},
           {value: 'Johor'} ,
           {value: 'Kedah'},
           {value: 'Kelantan'},
           {value: 'Labuan'},
           {value: 'Malacca'},
           {value: 'Negeri Sembilan'},
           {value: 'Pahang'},
           {value: 'Penang'},
           {value: 'Perak'},
           {value: 'Perlis'},
           {value: 'Putrajaya'},
           {value: 'Sabah'},
           {value: 'Sarawak'},
           {value: 'Terengganu'},
         ],
    datumTokenizer: function(d) {
      return Bloodhound.tokenizers.whitespace(d.value);
    },
    queryTokenizer: Bloodhound.tokenizers.whitespace
  });

  function my_locations(q, sync) {
    if (q === '') {
      sync(my_location_engine.all());
    }
    else {
      my_location_engine.search(q, sync);
    }
  }

  var other_location_engine = new Bloodhound({
    local: [
      {value: 'Australia'},
      {value: 'Brunei'},
      {value: 'Hong Kong'},
      {value: 'Indonesia'},
      {value: 'Korea (South)'},
      {value: 'New Zealand'},
      {value: 'Philippines'},
      {value: 'Singapore'},
      {value: 'Taiwan'},
      {value: 'Thailand'},
      {value: 'Vietnam'},
    ],
    datumTokenizer: function(d) {
      return Bloodhound.tokenizers.whitespace(d.value);
    },
    queryTokenizer: Bloodhound.tokenizers.whitespace
  });

  function other_locations(q, sync) {
    if (q === '') {
      sync(other_location_engine.all());
    }
    else {
      other_location_engine.search(q, sync);
    }
  }

 $(document).ready(function() {
   my_location_engine.initialize();
   other_location_engine.initialize();

   var locations = $("#locations").tokenfield({
     showAutocompleteOnFocus: true,
     typeahead: [null,
        {
          name: 'Malaysia', display: 'value', source: my_locations, limit: 20,
          templates: {
            header: '<h4 class="location-category">Malaysia</h4>'
          }
        },
        {
          name: 'More-Countries', display: 'value', source: other_locations, limit: 50,
          templates: {
            header: '<h4 class="location-category">More Countries</h4>'
          }
        },
     ],
   }).on('tokenfield:createtoken', function (event) {
     // Prevent duplicate values in the field
     var existingTokens = $(this).tokenfield('getTokens');
     $.each(existingTokens, function(index, token) {
       if (token.value === event.attrs.value)
         event.preventDefault();
     });

   }).on('tokenfield:createdtoken', function (event) {
     $('#login-form').bootstrapValidator('revalidateField', 'locations');

   }).on('tokenfield:removedtoken', function (e) {
     $('#login-form').bootstrapValidator('revalidateField', 'locations');
   });

   $('#login-form').bootstrapValidator({
     message: 'This value is not valid',
     container: 'popover',
     feedbackIcons: {
       valid: 'glyphicon glyphicon-ok',
       invalid: 'glyphicon glyphicon-remove',
       validating: 'glyphicon glyphicon-refresh'
     },
     fields: {
       full_name: {
         validators: {
           notEmpty: {
             message: 'Your name cannot be empty'
           }
         }
       },
       email: {
         validators: {
           emailAddress: {
             message: 'Please input a valid email address'
           }
         }
       },
       password: {
         validators: {
           notEmpty: {
             message: 'The password cannot be empty'
           },
           identical: {
             field: 'confirm_password',
             message: 'The password and its confirm are not the same'
           },
           stringLength: {
             min: 6,
             message: '6 characters minimum'
           }
         }
       },
       confirm_password: {
         validators: {
           notEmpty: {
             message: 'The confirmed password cannot be empty'
           },
           identical: {
             field: 'password',
             message: 'The password and its confirm are not the same'
           },
           stringLength: {
             min: 6,
             message: '6 characters minimum'
           }
         }
       },
       company_name: {
         validators: {
           notEmpty: {
             message: 'The company name cannot be empty'
           }
         }
       },
       locations: {
         validators: {
           callback: {
             callback: function (value, validator, $field) {
               if (locations.tokenfield('getTokens').length == 0) {
                 return false;
               }

               return true;
             },
             message: 'The locations cannot be empty'
           }
         }
       },
       "agreement": {
         validators: {
           notEmpty: {
             message: 'You have to accept the terms and policies'
           }
         }
       }
     }

   }).on('success.form.bv', function (e) {
     e.preventDefault();

     var form_data = $(this).serializeArray();
     if ($('input#maybank_interests').is(':checked')) {
         form_data.push({name: "maybank_interest", value: '1'});
     }

     $.ajax({
       "type": 'POST',
       "url": $(this).attr('action'),
       "data": form_data,
       "success": function (response, textstatus, jqXHR) {
         BootstrapDialog.show({
           type: BootstrapDialog.TYPE_DEFAULT,
           title: 'Activate your account',
           message: 'You will receive a confirmation mail. Just click on the link in the email to activate your account.',
           buttons: [{
             label: 'OK',
             action: function (dialogRef) {
               dialogRef.close();
               window.location.href = response;
             }
           }]
         });
       },
       "error": function (response, textstatus, jqXHR) {
         var result = JSON.parse(response.responseText);

         BootstrapDialog.show({
           type: BootstrapDialog.TYPE_WARNING,
           title: 'Sign up',
           message: result.message,
           buttons: [{
             label: 'OK',
             action: function (dialogRef) {
               dialogRef.close();

               if (result.filed !== '') {
                 $('#login-form').bootstrapValidator('updateStatus', result.field, 'INVALID');
                 $("#" + result.field).val('').focus();
               }
             }
           }]
         });
         grecaptcha.reset();
       }
     });
   });

   //$('.form-group input').not("#agreement").jvFloat();
});
</script>
<!-- Start Visual Website Optimizer Asynchronous Code -->
<script type='text/javascript'>
  var _vwo_code=(function(){
  var account_id=273930,
  settings_tolerance=2000,
  library_tolerance=2500,
  use_existing_jquery=false,
  /* DO NOT EDIT BELOW THIS LINE */
  f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);this.load('http://dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
</script>
<!-- End Visual Website Optimizer Asynchronous Code -->



<!-- Mirrored from kakitangan.com/signup by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2017 10:36:50 GMT -->
</html>