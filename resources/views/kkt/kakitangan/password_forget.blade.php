<!DOCTYPE html>



<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from kakitangan.com/password_forget by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2017 10:37:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Reset</title>

    <link href="static/js/jquery-ui-1.11.3/jquery-ui.min.css"  rel="stylesheet">
    <link href="static/css/bs/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/bootstrapValidator.min.css" rel="stylesheet">

    <script src="static/js/jquery-1.11.2.min.js"></script>
    <script src="static/css/bs/js/bootstrap.min.js"></script>
    <script src="static/js/bootstrapValidator.min.js"></script>
    <script src="static/js/uservoice.js"></script>

    <link href="static/css/common.css" rel="stylesheet">
    <link href="static/css/password_forget.css" rel="stylesheet">

    <script>
        $(document).ready(function() {
            $('#form-forgetpassword').bootstrapValidator({
                message: 'This value is not valid',
                container: 'popover',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    email: {
                            validators: {
                                notEmpty: {
                                    message: 'The email cannot be empty'
                                },
                                emailAddress: {
                                    message: 'Please input a valid email address'
                                }
                            }
                        },
                }
            }).on('success.form.bv', function (e) {
                    e.preventDefault();

                    $.ajax({
                        type: "POST",
                        url: "/password_reset_email",
                        data: $(this).serialize(),
                        success: function(response, textstatus, jqXHR){
                            window.location.href = response;
                        },
                        error: function(response, textstatus, jqXHR){
                            var alert_result = JSON.parse(response.responseText);

                            $('#message-dialog span#message').text(alert_result.message);
                            $('#message-dialog').modal('show');
                        }
                    });
            });

            $('#message-dialog-ok').click(function(event) {
                event.preventDefault();
                $('#message-dialog').modal('hide');
            });

        });
    </script>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-header">
            <div class="container">
                <a class="brand navbar-left">
                    <span class="brand-second">KAKITANGAN.COM</span>
                </a>
            </div>
        </nav>

        <div class="container">
            <form id="form-forgetpassword" class="form-horizontal"
                  action="https://kakitangan.com/password_reset_email" method="post">
                <input type='hidden' name='csrfmiddlewaretoken' value='chebT4ra2L2eMBXJH7kHjARxZj4VrWSx' />

                <div class="form-group row">
                    <div class="col-sm-12">
                        <p id="form-Title">Forgot your password?</p>
                    </div>

                    <div class="col-sm-12">
                        <p>
                            Hey, it happens to everyone. To reset your password,
                            enter the email you use to sign in to Kakitangan.com.
                            An email will be sent to you with instructions to reset your password.
                        </p>
                    </div>

                </div>

                <div class="form-group">
                    <label for="id_email">Email address:</label> 
                    <div class="col-sm-12">
                        <input id="id_email" name="email" type="email" class="form-control" required />
                    </div>
                </div>

                <div class="form-group form-action">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <button type="submit" class="btn btn-primary form-control">Send</button>
                        </div>
                    </div>

                    <div class="row second-action">
                        <div class="col-sm-6 col-sm-offset-3">
                            <a href="login.html">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <nav class="navbar jumbotron-footer">
            <a href="landing/terms.html">Privacy &#38; Terms</a>
        </nav>

        <div id="message-dialog" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Reset Password</h4>
                    </div>
                   <div class="modal-body"> 
                       <div>
                           <span id="message"><strong></strong></span>
                       </div>
                   </div>
                   <div class="modal-footer">
                       <a href="#" class="btn btn-primary" id="message-dialog-ok">Okay</a>
                   </div>
                </div>
            </div>
        </div>

    </div>
</body>

<!-- Mirrored from kakitangan.com/password_forget by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2017 10:37:13 GMT -->
</html>
