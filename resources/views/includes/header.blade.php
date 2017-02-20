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
                             <!-- <li><a href="signup" class="btn btn_primary btn_sign">SIGN UP</a></li> -->
                             <li><a href="#" data-toggle="modal" data-target="#registerModal">Register</a></li>

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

    <!-- Begin of register popup window -->
    <div class="modal fade" hidden="true" id="registerModal" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            
    <div class="col-md-offset-3 col-md-6">
      <div class="panel panel-default">
        <div class="panel-body">
          <!-- <form class="form-horizontal" action="https://kakitangan.com/register" method="post" id="login-form">
            <input type='hidden' name='csrfmiddlewaretoken' value='chebT4ra2L2eMBXJH7kHjARxZj4VrWSx' /> -->

            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}" id="login-form">
              {{ csrf_field() }}

            <div class="form-group" style="padding-top:0; text-align:center">
              <p id="form-Title">Register company account</p>
            </div>

            <div class="join-team" style="padding-left:2em">
                <div class="form-group">
                    <div class="join-icon">
                        <img src="/static/images/svg/join-icon.svg" alt="join-icon">
                    </div>
                    <div class="join-team_text">
                        <span>Joining the existing team?</span><br>
                        Ask your HR to invite you, instead of registering.
                    </div>
                </div>
            </div>

          <div class="form-group">
            <div class="{{ $errors->has('name') ? ' has-error' : '' }}">

                <div class="col-md-12">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Your Name" required>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          </div>

          <div class="form-group row" style="padding-top: 1.5em">
            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">

                  <div class="col-md-7">
                      <!-- Use style inside input to adjust input width -->
                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Your Email Address" required>

                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="{{ $errors->has('contact_number') ? ' has-error' : '' }}">
                  <div class="col-sm-5">
                    <input name="contact_number" id="contact_number" type="text" class="form-control" value="{{ old('contact_number') }}" placeholder="Phone No." required >

                      @if ($errors->has('contact_number'))
                          <span class="help-block">
                              <strong>{{ $errors->first('contact_number') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>
          </div>

          <div class="form-group row" style="padding-top: 1.5em">
            <div class="{{ $errors->has('company_name') ? ' has-error' : '' }}">
              <div class="col-sm-7">
                <input name="company_name" id="company_name" type="text" class="form-control" value="{{ old('company_name') }}" placeholder="Company name" required >

                      @if ($errors->has('company_name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('company_name') }}</strong>
                          </span>
                      @endif
              </div>
            </div>

              <div class="col-sm-5">
                <div class="ui-widget">
                  <span class="glyphicon glyphicon-user"></span>
                  <select id="role_id" name="role_id" class="form-control selectpicker" required>
                    <option value="" disabled selected style="display:none">Position</option>
                    @foreach($roles as $role)
                    <option value="{{ $role->id }}">
                              {{ $role->name }}
                    </option>
                    @endforeach
                  </select>
                </div>
              </div>
          </div>

          <div class="form-group row" style="padding-top: 1.5em">
            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required>
            </div>
          </div>

<!--        <div class="form-group fg-locations row">
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
            </div> -->

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
                  <p>I already have an account. <a href="/login">Sign in</a></p>
                </div>
              </div>
            </div>

            <input type="hidden" name="campaign_id" value="" />
          </form>
        </div>
      </div>
    </div>

        </div>
    </div>
    </div>
    <!-- End of register popup window -->