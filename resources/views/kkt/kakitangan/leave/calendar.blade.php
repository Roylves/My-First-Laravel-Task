
<!DOCTYPE html>



<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">
    <title> Leave Application | Kakitangan </title>

    <link href='//fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700'
          rel='stylesheet' type='text/css'/>

    <link href="/static/js/jquery-ui-1.11.3/jquery-ui.min.css" rel="stylesheet"/>
    <link href="/static/css/bs/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/static/css/style.css" rel="stylesheet" />
    <link href="/static/css/dashboard.css" rel="stylesheet"/>
    <link href="/static/css/bootstrap-dialog.min.css" rel="stylesheet"/>
    <link rel="shortcut icon" type="image/x-icon" href="/static/images/favicon.ico"/>

    
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="/static/css/bs/css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="/static/css/bootstrap-select.min.css" />
  <link rel="stylesheet" href="/static/css/bootstrap-datepicker3.min.css" />
  <link rel="stylesheet" href="/static/css/fullcalendar.min.css" />
  <link rel="stylesheet" href="/static/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="/static/css/bootstrapValidator.min.css" />
  <link rel="stylesheet" href="/static/css/daterangepicker.css"/>
  <link rel="stylesheet" href="/static/css/calendar.css"/>
  <style>
   .btn.leave_action {
     margin-bottom: 6px;
   }
   .leave-table-fitlering .form-controls:first-child {
     margin-left: 0px;
   }
   .date-range-picker {
     padding: 3px;
     width: 200px;
   }
   .alert {
     margin-top: 10px;
     margin-bottom: 0;
   }
   .alert a {
     text-decoration: underline;
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
              <li class="">
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

              <li class="current">
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
        
  
  <div class="container">
    
    <section class="section section-profile">
      <div role="tabpanel" class="tabs">
	      <ul class="nav-tabs" role="tablist">
	        <li role="presentation" class="active">
	          <a href="#apply" aria-controls="apply" role="tab" data-toggle="tab" id="tabApply">
              Apply for leave
            </a>
	        </li>
	        <li role="presentation">
	          <a href="#applications" aria-controls="applications" role="tab"
               data-toggle="tab" id="tabApplications">
              View applications
            </a>
	        </li>
	        <li role="presentation" class="hidden">
	          <a href="#replacementLeaves" aria-controls="replacementLeaves"
               role="tab" data-toggle="tab" id="tabReplacementLeaves">
              Replacement credit
            </a>
	        </li>
          
          <li role="presentation">
              <span>
	                <a href="/leave/report" class="btn btn-primary">
                      <i class="glyphicon glyphicon-stats"></i>
		                  Report
	                </a>
              </span>
          </li>
          
	      </ul>

	      <div class="tab-content">
	        <div role="tabpanel" class="tab-pane active" id="apply">
	          <section class="section-secondary section-calendar">
	            <div class="row">
		            <div class="col-md-8">
		              <div class="section-head">
		                <h2 class="section-title">Calendar</h2><!-- /.section-title -->

		                <div class="section-head-entry">
		                  <p>
                        Plan ahead and make sure your leave doesn't clash with
                        any company or department's events by checking your calendar(s).
                      </p>

                      

		                </div><!-- /.section-head-entry -->

		                <div class="section-head-inner hide">
		                  <div class="row">
			                  <div class="col-md-5">
			                  </div><!-- /.col-md-5 -->

			                  <div class="col-md-7">
			                    <div class="section-head-actions">
			                      <a href="#" class="link-subscribe">
                              <i class="glyphicon glyphicon-download-alt"></i>
                              Subscribe to calendar
                            </a>
			                    </div><!-- /.section-head-actions -->
			                  </div><!-- /.col-md-7 -->
		                  </div><!-- /.row -->
		                </div><!-- /.section-inner -->
		              </div><!-- /.section-head -->

		              <div class="calendar"></div><!-- /.calendar -->
		            </div><!-- /.col-md-8 -->

		            <div class="col-md-4">
		              <div class="form form-event">
		                <div role="tabpanel" class="tabs">
		                  <div class="form-body">
			                  <div class="tab-content">
			                    <div role="tabpanel" class="tab-pane active" id="leave">
			                      <form id="applyleave" method="post">
			                        <input type='hidden' name='csrfmiddlewaretoken' value='ksUSd9UQK0W7yudKorXH7vUBtGcR3vUv' />
			                        <input type='hidden' name='action' value='apply_leave' />
			                        <div class="form-group">
                                
                                <div class="form-row">
                                  <label for="locationm" class="form-label">Select Location</label>
                                  <div class="form-controls">
                                    <select name="location" id="location" class="select" value="Johor">
                                      
                                      <option value="Johor" selected>Johor</option>
                                      
                                    </select>
                                  </div>
                                </div>
				                        <div class="form-row">
				                          <label for="selectEmployee" class="form-label">Select Employee</label>

				                          <div class="form-controls">
                                    <input class="form-control field " type="text" name="selectEmployee"
                                           id="selectEmployee" value="Roylves" />
				                          </div><!-- /.form-controls -->
				                        </div><!-- /.form-row -->
                                
				                        <div class="form-row">
				                          <label for="leaveType" class="form-label">Leave Type</label>

				                          <div class="form-controls">
				                            <select name="leaveType" id="leaveType" class="select">
	                                    
				                              <option value="Annual"
                                              data-availdays="7.0" data-continuous-policy="0"  selected >
                                        Annual
                                      </option>
	                                    
				                              <option value="Hospitalization"
                                              data-availdays="60.0" data-continuous-policy="1" >
                                        Hospitalization
                                      </option>
	                                    
				                              <option value="Sick"
                                              data-availdays="14.0" data-continuous-policy="1" >
                                        Sick
                                      </option>
	                                    
				                            </select>

				                            <span class="form-hint"><strong id='avail-days'>  </strong> days available</span>
				                          </div><!-- /.form-controls -->
				                        </div><!-- /.form-row -->
			                        </div><!-- /.form-group -->

			                        <div class="form-group">
				                        <div class="form-row clearfix">
				                          <div class="form-col">
				                            <label for="sDate" class="form-label">Start Date</label>

				                            <div class="form-controls date">
				                              <input type="text" class="form-control field" name="sDate" id="sDate" >
    				                        </div><!-- /.form-controls -->
				                          </div><!-- /.form-col -->

				                          <div class="form-col">
				                            <label for="eDate" class="form-label">End Date</label>

				                            <div class="form-controls date">
				                              <input type="text" class="form-control field" name="eDate" id="eDate">
				                            </div><!-- /.form-controls -->
				                          </div><!-- /.form-col -->
				                        </div><!-- /.form-row -->

				                        <div class="form-row clearfix form-group-full-day">
				                          <div class="form-col">
				                            <div class="radios btn-group">
					                            <div class="radio">
					                              <input type="radio" name="fullDay" id="fullDay" value="0" checked>
					                              <label class="form-label form-label-fullday" for="fullDay">Full day</label>
					                            </div><!-- /.radio -->
				                              <div class="radio">
					                              <input type="radio" name="fullDay" id="am" value="1">
					                              <label class="form-label" for="am">AM</label>
				                              </div><!-- /.radio -->
				                              <div class="radio">
					                              <input type="radio" name="fullDay" id="pm" value="2" >
					                              <label class="form-label" for="pm">PM</label>
				                              </div><!-- /.radio -->
				                            </div><!-- /.list-radios -->
				                          </div><!-- /.form-col -->
				                        </div><!-- /.form-row -->
			                        </div><!-- /.form-group -->

			                        <div class="form-group">
				                          <div class="form-row">
				                              <label for="reason" class="form-label">Reason</label>
				                              <div class="form-controls">
				                                  <textarea name="reason" id="reason" cols="30" rows="10"
                                                    class="form-control field field-textarea"></textarea>
				                              </div><!-- /.form-controls -->
				                          </div><!-- /.form-row -->
			                        </div><!-- /.form-group -->

                              

			                        <div class="form-actions">
				                        <button type="submit" id="submitApply" class="btn btn-primary form-btn">
                                            <span class="hide"><i class="icon-refresh icon-spin"></i></span>
                                            Apply
                                        </button>
			                        </div><!-- /.form-actions -->
			                        <div class="form-group">
				                        <div classs="form-row" id="alert">
				                        </div>
			                        </div>
			                      </form>

			                    </div><!-- /.tab-pane -->
			                  </div><!-- /tab-content -->
		                  </div><!-- /.form-body -->
		                </div><!-- /.tabs -->

		              </div><!-- /.form form-event -->
		            </div><!-- /.col-md-4 -->
	            </div><!-- /.row -->
	          </section><!-- /.section-secondary -->
	        </div>

          <div role="tabpanel" class="tab-pane" id="applications">
            <section class="section-secondary section-summary">
              <div class="section-head">
                <div class="row">
                  <div class="col-md-10">
                    <h2 class="section-title">Leave Summary</h2><!-- /.section-title -->

                    <p>View and manage your leave applications.</p>
                  </div><!-- /.col-md-10 -->

                </div><!-- /.row -->
              </div><!-- /.section-head -->

              <div class="section-body">
                  <div class="form form-rules leave-table-fitlering">
                    <div class="form-row">
                      <div class="form-controls">
                        <select id="select_department" name="select_department" class="selectpicker select-department" required>
                          <option value="">Select department</option>
                        </select>
                      </div>
                      <div class="form-controls">
                        <select id="select_location" name="select_location" class="selectpicker select-location" required>
                          <option value="">Select location</option>
                        </select>
                      </div>
                      <div class="form-controls">
                        <input id="daterange-summarytable" class = "field date-range-picker" placeholder="Select date range to filter" value="" >
                      </div>
                      <div class="pull-right">
                          <div class="form-controls">
                              <input class="form-control field" type="text" id="leave_summary_table_search" placeholder="search"/>
                          </div>
                          <div class="form-controls">
                            <div class="section-actions">
                              <a href="/leave/view_application?format=csv&q=leave_history" data-href="/leave/view_application?format=csv&q=leave_history" class="link-export">
                                <i class="glyphicon glyphicon-export"></i>
                                Export
                              </a>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                <div class="table">
                  <table id="leaveTable" width="100%">
                    <thead>
                      <tr>
                        <th width="140">Employee</th>
                        <th width="100">Position</th>
                        <th width="60">Date</th>
                        <th width="90">From</th>
                        <th width="90">To</th>
                        <th width="63">Days</th>
                        <th width="110">Type</th>
                        <th width="">Reason</th>
                        <th width="60">Attachment</th>
                        <th width="170">&nbsp;</th>
                      </tr>
                    </thead>
                  </table>
                </div><!-- /.table -->
              </div><!-- /.section-body -->
            </section><!-- /.section-secondary -->
          </div>

          
	      </div>
      </div>
    </section><!-- /.section section-users -->

    <div id="modal-decline" class="modal">
	    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
            <h3>Decline application</h3>
          </div>
          <div class="modal-body">
            <p>
              Are you sure you want to decline this application?
			        Please confirm with a reason.
            </p>
            <p>
              <textarea name="decline_reason" class="form-control"></textarea>
            </p>
          </div>
          <div class="modal-footer">
            <a href="#" data-dismiss="modal" aria-hidden="true" class="btn secondary">Cancel</a>
            <a href="#" id="btn_decline" data-dismiss="modal" class="btn btn-danger confirm">Decline</a>
          </div>
        </div>
      </div>
    </div>

    <div id="colleagues_leave" class="hidden">
        <h4 class="name"></h4>
        <span class="leave_type"></span> leave; <span class="status"></span>.
    </div>

  </div><!-- /.container -->
  

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

        
        <button type="button" class="close close-refer-bar" aria-label="Close"
                onclick="$('.navbar-refer').hide();">
            <span aria-hidden="true">&times;</span>
        </button>
        
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
      

      
  <script type="text/javascript" src="/static/js/typeahead.bundle.min.js"></script>
  <script type="text/javascript" src="/static/js/moment.min.js"></script>
  <script type="text/javascript" src="/static/js/fullcalendar.min.js"></script>
  <script type="text/javascript" src="/static/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="/static/js/bootstrapValidator.min.js"></script>
  <script type="text/javascript" src="/static/js/jquery.isloading.min.js"></script>
  <script type="text/javascript" src="/static/js/moment.min.js"></script>
  <script type="text/javascript" src="/static/js/jquery.daterangepicker.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.11/sorting/datetime-moment.js"></script>

  <script> var Browser = {isIE:false};</script><!-- By default we will assume that the browser is not IE -->
  <!--[if IE 5]><script>Browser = {isIE:true,version:5};</script><![endif]-->
  <!--[if IE 6]><script>Browser = {isIE:true,version:6};</script><![endif]-->
  <!--[if IE 7]><script>Browser = {isIE:true,version:7};</script><![endif]-->
  <!--[if IE 8]><script>Browser = {isIE:true,version:8};</script><![endif]-->
  <!--[if IE 9]><script>Browser = {isIE:true,version:9};</script><![endif]-->

  <script type="text/javascript">
   function getLocation() {
     return $('#location').val();
   }

   function getEmployee(selectemployee_engine, selectemployee_input) {
     var employee_email = '';

     employee_infos = selectemployee_engine.get([selectemployee_input.val()]);

     if (employee_infos.length > 0) {
         employee_email = employee_infos[0]['value'];
     }
     return employee_email;
   }

   function UpdateAvailDays() {
     var sel = document.getElementById('leaveType');
     var avail_days = sel.options[sel.selectedIndex].getAttribute('data-availdays');

		 document.getElementById("avail-days").innerHTML = avail_days;
   }

   function ActiveTab(tab) {
     $('.nav-tabs a[href="#' + tab + '"]').tab('show');
   }

   function UpdateApplicationSummaryTable(table) {
     table.ajax.reload();
   }

   function GenerateSelectionEmployeeRequestUrl() {
     var url = '/leave/query_employees';
     var location = getLocation();
     if (typeof location !== 'undefined' && location.length > 0) {
       url = url + '?location=' + location;
     }
     return url;
   }


   function UpdatePolicyOption(employee) {
     var data = [];
     data.push({name:"action", value:"load_policy_option"});
     data.push({name:"employee", value: employee});
     data.push({name:"csrfmiddlewaretoken", value:getCookie('csrftoken')});

     $.ajax({
       type: 'POST',
       url: '/leave/calendar',
       data: data,
       success: function (response, textStatus, jqXHR) {
         if (textStatus == 'success') {

           var policyOption = $('#leaveType');

           policyOption.find('option').remove();
           policyOption.prepend(response);

           $('#leaveType').selectpicker('refresh');

           UpdateAvailDays();
         }
       },
       error: function (response, textstatus, jqXHR) {
         var result = JSON.parse(response.responseText);

         BootstrapDialog.show({
           type: BootstrapDialog.TYPE_DEFAULT,
           title: 'Leave Application',
           message: 'Fail to select this employee, please refresh the current page.',
           buttons: [{
             label: 'OK',
             action: function (dialogRef) {
               dialogRef.close();
             }
           }]
         });
       }
     });
   }

   function ConvertEventsToArrayWithinRang(events, start_date, end_date) {
     var event_list = [];

     for (var i = 0; i < events.length; i++) {
       if (events[i].source.color != 'green') {
         continue;
       }

       // Some holidays doesn't state end date,
       // we shall assume they are a one-day holiday
       if (!events[i].end){
         events[i].end = events[i].start
       }

       event_start_date = new Date(events[i].start.format('YYYY-MM-DD'));
       event_end_date = new Date(events[i].end.format('YYYY-MM-DD'));

       event_start_date.setHours(0, 0, 0);
       event_end_date.setHours(0, 0, 0);

       // backend has tricky hacky to increate end_date to display as
       // taking the full cell of calendar control
       // so here substract 1 day
       event_end_date.setDate(event_end_date.getDate() - 1);

       if (event_end_date < start_date || event_start_date > end_date) {
         continue;
       }

       for (var d = event_start_date; d <= event_end_date; d.setDate(d.getDate() + 1)) {
         event_list.push(moment(d).format("YYYY-MM-DD"));
       }
     }

     return event_list;
   }

   function GetWorkingDays(t_date) {
     var working_days = JSON.parse("[1, 1, 1, 1, 1, 0, 0]");

     // Make Sunday the first in the week;
     // what's provided is Monday first.
     working_days.unshift( working_days.pop() );

     return working_days[t_date.getDay()];
   }

   function UpdateApplyButtonLabel() {
     var start_date = $('.form-control#sDate').datepicker('getDate');
     var end_date = $('.form-control#eDate').datepicker('getDate');
     var full_day = $('#applyleave input[name=fullDay]:checked').val() == '0';
     var is_selected_policy_continuous = $('select#leaveType').find('option:selected').attr('data-continuous-policy') === '1';
     var events = $('.calendar').fullCalendar('clientEvents');

     
       var event_by_date_list = ConvertEventsToArrayWithinRang(
         events,
         start_date,
         end_date
       );
     

     days = 0;

     for (var d = start_date; d <= end_date; d.setDate(d.getDate() + 1)) {
       var work_days = GetWorkingDays(d) ;

       if (!is_selected_policy_continuous && (event_by_date_list.indexOf(moment(d).format("YYYY-MM-DD")) > -1 ||
           work_days == 0)) {
         continue;
       }

       if(work_days == 0) {
         work_days = 1
       }
       days = days + work_days;

     }
     if (!full_day && days > 0) {
       days = 0.5;
     }

     $('button#submitApply').attr('data-apply-days', days.toString());
     $('button#submitApply').text('Apply for ' + days.toString() + ' days');
   }

   function LeaveTableFilter(leavetable, select_department, select_location, search_by_text) {
     //populate the options for selection filter
     var column_department =  leavetable.column('department:name');

     column_department.data().unique().sort().each(function(d, j) {
       select_department.append('<option value="'+d+'">'+d+'</option>');
     });
     select_department.selectpicker('refresh');

     select_department.change(function() {
       var val = $.fn.dataTable.util.escapeRegex(
            $(this).val()
          );

      column_department.search( val ? '^'+val+'$' : '', true, false ).draw();
     });

     var column_location =  leavetable.column('location:name');

     column_location.data().unique().sort().each(function(d, j) {
       select_location.append('<option value="'+d+'">'+d+'</option>');
     });
     select_location.selectpicker('refresh');

     select_location.change(function() {
       var val = $.fn.dataTable.util.escapeRegex(
            $(this).val()
          );

      column_location.search( val ? '^'+val+'$' : '', true, false ).draw();
     });

     //global search by text
     search_by_text.on('keyup click', function() {
      leavetable.search($(this).val()).draw();
     });
   }

   function process_leave(data, row){
     $.ajax({
       type: 'POST',
       url: '/leave/view_application',
       data: data,
       success: function (result) {
         row.data(JSON.parse(result)).draw();

         if(data['credit'] == 1){
           window.location.href='/leave/calendar/replacementLeaves?' + GetDateRangeFilterAsParam($('#daterange-replacementtable'));
         }
         else {
           window.location.href='/leave/calendar/applications?' + GetDateRangeFilterAsParam($($('#daterange-summarytable')));
         }
       },
       error: function (response, textstatus, jqXHR) {
         var result = JSON.parse(response.responseText);

         BootstrapDialog.show({
           type: BootstrapDialog.TYPE_DEFAULT,
           title: 'Leave Application',
           message: result.message,
           buttons: [{
             label: 'OK',
             action: function (dialogRef) {
               dialogRef.close();

               //TODO: refresh the application summary table
             }
           }]
         });
       }
     });
   }

   function SetDateRangeFilterForTable(dateRangePicker, start, end) {
     var start_date = Date.parse(start);
     var end_date = Date.parse(end);
     
     var drp = dateRangePicker.dateRangePicker({
       format: 'DD/MM/YYYY',
     });

     dateRangePicker.data('dateRangePicker').setDateRange(
        moment(start_date).format('DD/MM/YYYY'),
        moment(end_date).format('DD/MM/YYYY')
     );

     dateRangePicker.focus(function() {
         dateRangePicker.data('dateRangePicker').open();
     });

     return drp;
   }

   function ReloadLeaveTable(html_table, table) {
     table.ajax.reload(function(json) {
       SetupLeaveActionEvent(html_table, table);
     });
   }

   var decline_row = null;
   function SetDateRangeFilterChangeEvent(dateRangePicker, html_table, table) {
     dateRangePicker.bind('datepicker-change',function(event,obj) {
       ReloadLeaveTable(html_table, table);
     })
     .bind('datepicker-apply',function(event,obj) {
       ReloadLeaveTable(html_table, table);
     })
     .bind('datepicker-first-date-selected', function(event, obj) {
       ReloadLeaveTable(html_table, table);
     });;
   }

   function SetupLeaveActionEvent(table, table_api) {
     table.find('input[type=submit].leave_action').click(function(){
       var leave_id = $(this).parents('tr').attr('id');
       var row = table_api.row('#' + leave_id);
       var data = row.data();

       data['csrfmiddlewaretoken'] = getCookie('csrftoken');
       data['leave_action'] = $(this).val();

       process_leave(data, row);
     });

     table.find('a.leave_action:contains("Decline")').click(function(){
       var leave_id = $(this).parents('tr').attr('id');
       decline_row = table_api.row('#' + leave_id);
     });
   }

   function GetDateRangeFilterValue(date_range_filter) {
       var selected_dates = [];
       var daterange = date_range_filter.val();
       if (daterange.trim() != "") {
         var dates = daterange.split("to");

         if (dates.length = 2) {
           selected_dates = [dates[0].trim(), dates[1].trim()];
         }
       }

       return selected_dates;
   }

   function GetDateRangeFilterAsParam(date_range_filter) {
       var selected_dates = GetDateRangeFilterValue(date_range_filter);
       return $.param({'start_date': selected_dates[0], 'end_date': selected_dates[1]});
   }

   $(document).ready(function () {
     //the calendar control require IE > 8 for good style and function
     //Check the IE version
     if (Browser.isIE){
       if (Browser.version <= 8){
         if (confirm('Your IE browser is out of date that cannot support calendar well. Would you like to upgrade to the new version?')) {
           window.location.href = 'https://browser-update.org/update.html';
         }
       }
     }

     //Make datatable support date like 'dd/mm'
     $.fn.dataTable.moment('DD/MM');

     //set the intial date range for date range picker
     var dateRangePicker_SummaryTable = SetDateRangeFilterForTable($('#daterange-summarytable'), '2017-01-10', '2017-04-10');
     

     //typeahead for select employee
     var selectemployee_engine = new Bloodhound({
       prefetch: {
         url: GenerateSelectionEmployeeRequestUrl(),
         cacheKey: 'employees_list',
         cache: false,
       },
       remote: {
         url: GenerateSelectionEmployeeRequestUrl(),
       },
       datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
       queryTokenizer: Bloodhound.tokenizers.whitespace,
       identify: function(obj) { return obj.name;  },
     });
     $('input[name="selectEmployee"]').typeahead({
       hint: true,
       highlight: true,
       minLength: 1
     },{
       name: 'selectEmployee',
       display: 'name',
       source: selectemployee_engine
     });

     $('form#applyleave #selectEmployee').bind('typeahead:select', function(ev, suggestion) {
       $('.calendar').fullCalendar('refetchEvents');
       UpdatePolicyOption(getEmployee(selectemployee_engine, $('form#applyleave #selectEmployee')));
     }).bind('typeahead:change', function(ev, suggestion) {
       $('.calendar').fullCalendar('refetchEvents');
       UpdatePolicyOption(getEmployee(selectemployee_engine, $('form#applyleave #selectEmployee')));
     });

     // set the active tab
     ActiveTab('apply');

     // Calendar
		 if( $('.calendar').length ){
			 $('.calendar').fullCalendar({
				 header: {
					 left: 'prev,next today',
					 center: 'title',
					 right: false
				 },
         height: 640,
         nextDayThreshold: '00:00:00',
         eventLimit: true,
         eventSources: [
           {
             url: 'leave/calendar',
             type: 'POST',
             data: function () {
               return {
                 action: 'load_calendar',
                 employee: getEmployee(selectemployee_engine, $('form#applyleave #selectEmployee')),
                 csrfmiddlewaretoken: getCookie('csrftoken')
               };
              },
             color: 'light blue'
           },
           {
             url: 'leave/calendar',
             type: 'POST',
             data: function() {
               return {
                 action: 'load_holiday_event',
                 location: getLocation(),
                 csrfmiddlewaretoken: getCookie('csrftoken')
               };
             },
             color: 'green'
           },
           {
             url: 'leave/calendar',
             type: 'POST',
             data: function() {
               return {
                 action: 'load_colleagues',
                 employee: getEmployee(selectemployee_engine, $('form#applyleave #selectEmployee')),
                 csrfmiddlewaretoken: getCookie('csrftoken')
               };
             },
             color: '#b5d25b'
           },
         ],
         eventMouseover: function(calEvent, jsEvent, view) {
           if(calEvent.hover === undefined) return;

           // Show pop up
           var hover = $('#colleagues_leave');
           hover.find('.name').html(calEvent.hover.name);
           hover.find('.leave_type').html(calEvent.hover.leave_type);
           hover.find('.status').html(calEvent.hover.status);

           $(jsEvent.target).popover({
             content: hover.html(),
             html: true,
             trigger: 'hover click',
             placement: 'top',
             container: 'body',
           });

         },
         eventAfterRender: function(calEvent, element, view){
           if(calEvent.hover === undefined) return;

           var color = '';
           switch(calEvent.hover.leave_type){
             case 'Annual':
               color = '#b5d25b';
               break;
             case 'Sick':
             case 'Hospitalization':
               color = '#c5a070';
               break;
             case 'Maternity':
             case 'Paternity':
               color = '#88b0f9';
               break;
             case 'Compassionate':
               color = '#f9817c';
               break;
             case 'Custom':
               color = '#d2a4f9';
               break;
             case 'Replacement':
               color = '#cf6108';
               break;
           }
           if(calEvent.hover.status == 'pending'){
             color = '#d1d4db';
           }
           element.css('background-color', color);
         }
			 });
		 }

     $('#tabApply').on('shown.bs.tab', function(e){
       $('.calendar').fullCalendar('render');
     });

     // view_application
     var leave_table = $('#leaveTable').DataTable({
       "paging": false,
       "searching": true,
       "dom": "ltipr",
       "initComplete": function (settings, json) {
         var this_table = this.api().table();

         SetupLeaveActionEvent($(this), this_table);

         LeaveTableFilter(this_table,
             $('#select_department'),
             $('#select_location'),
             $('input#leave_summary_table_search'));
       },
       "ajax": {
         "url": "/leave/view_application",
         "data": function (d) {
           d.q = "leave_history";

           var selected_dates = GetDateRangeFilterValue($('#daterange-summarytable'));
           if (selected_dates.length = 2) {
               d.start_date = selected_dates[0];
               d.end_date = selected_dates[1];
           }
         },
       },
       "columns": [
         { "data": "employee",
           "render": function (data, type, full, meta) {
             var email = full['email'];
             var link = "/user/" + email ;
             return '<a href="'+ link +'">' + data + '</a>';
           }
         },
         { "data": "position", "name": "position"},
         { "data": "date", "name": "date" },
         { "data": "from", "name": "from" },
         { "data": "to", "name": "to" },
         { "data": "days", "name": "days" },
         { "data": "type", "name": "type" },
         { "data": "reason", "name": "reason" },
         { "data": "attachment", "name": "attachment" },
         { "data": "actions", "name": "actions" },
         { "data": "email", "name": "email",  "visible": false },
         { "data": "credit", "name": "credit",  "visible": false },
         { "data": "department", "name": "department", "searchable": true, "visible": false },
         { "data": "location", "name": "location", "searchable": true, "visible": false },
         { "data": "subsidiary", "name": "subsidiary", "searchable": true, "visible": false },
       ]
     });
     SetDateRangeFilterChangeEvent(dateRangePicker_SummaryTable, $('#leaveTable'), leave_table);

     var replacement_table = $('#replaceLeaveTable').DataTable({
       "paging": false,
       "searching": true,
       "dom": "ltipr",
       "initComplete": function (settings, json) {
         var this_table = this.api().table();

         SetupLeaveActionEvent($(this), this_table);

         LeaveTableFilter(this_table,
             $('#replacement_select_department'),
             $('#replacement_select_location'),
             $('input#replacement_table_search'));
       },
       "ajax": {
         "url": "/leave/view_application",
         "data": function (d) {
           d.q = "replacement_credit";
           var daterange = $('#daterange-replacementtable').val();
           if (daterange.trim() != "") {
             var dates = daterange.split("to");

             if (dates.length = 2) {
              d.start_date = dates[0].trim();
              d.end_date = dates[1].trim();
             }
           }
         },
       },
       "columns": [
         { "data": "employee",
           "render": function (data, type, full, meta) {
             var email = full['email'];
             var link = "/user/" + email ;
             return '<a href="'+ link +'">' + data + '</a>';
           }
         },
         { "data": "position", "name": "position"},
         { "data": "date", "name": "date" },
         { "data": "from", "name": "from" },
         { "data": "to", "name": "to" },
         { "data": "days", "name": "days" },
         { "data": "type", "name": "type" },
         { "data": "reason", "name": "reason" },
         { "data": "actions", "name": "actions" },
         { "data": "email", "name": "email",  "visible": false },
         { "data": "credit", "name": "credit",  "visible": false },
         { "data": "department", "name": "department", "searchable": true, "visible": false },
         { "data": "location", "name": "location", "searchable": true, "visible": false },
         { "data": "subsidiary", "name": "subsidiary", "searchable": true, "visible": false },
       ]
     });
     

     $('#applyleave, #replacement_leave_form').bootstrapValidator({
       message: 'This value is not valid',
       container: 'popover',
       feedbackIcons: {
         valid: 'glyphicon glyphicon-ok',
         invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
       },
       fields: {
         selectEmployee: {
           validators: {
             notEmpty: {
               message: 'The employee email cannot be empty'
             }
           }
         },
         sDate: {
           validators: {
             date: {
               format: 'DD/MM/YYYY',
               message: 'The start date is not a valid date'
             }
           }
         },
         eDate: {
           validators: {
             date: {
               format: 'DD/MM/YYYY',
               message: 'The end date is not a valid date'
             }
           }
         },
         reason: {
           validators: {
             notEmpty: {
               message: 'The reason cannot be empty'
             }
           }
         }
       }
     }).on('success.form.bv', function (e) {
        e.preventDefault();

        var leaveType = $(this).find('input[name="leaveType"]').val();
        var action = $(this).find('input[name="action"]').val();
        var is_apply_credit = (leaveType == 'replacement' && action == 'apply_credit');

        var apply_days_str = $('#submitApply').attr('data-apply-days');
        var apply_days = 0;

        if (apply_days_str != '') {
         apply_days = parseFloat(apply_days_str);
        }

        if (!is_apply_credit && apply_days == 0) {
            BootstrapDialog.show({
                type: BootstrapDialog.TYPE_DEFAULT,
                title: 'Leave Application',
                message: 'You are applying for zero (0) day of leave. Please check your leave dates and try again.',
                buttons: [{
                    label: 'OK',
                    action: function (dialogRef) {
                        dialogRef.close();
                        return false;
                    }
                }]
            });
            return;
        }
        $('#submitApply span').removeClass('hide');

        var data = $(this).serializeArray();
        if (is_apply_credit) {
            data.push({name:"employee", value: getEmployee(selectemployee_engine,
                $('form#replacement_leave_form #selectEmployee'))});
        }
        else {
            data.push({name:"employee", value: getEmployee(selectemployee_engine,
                $('form#applyleave #selectEmployee'))});
        };

        $.ajax({
            "type": 'POST',
            "url": '/leave/calendar',
            "data": data,
            "success": function (response, textstatus, jqXHR) {
                // Do not update calendar if we're applying for
                // replacement credit
                if(is_apply_credit)
                    return;

                // update the calendar
                $('.calendar').fullCalendar('refetchEvents');

                // update the history list
                UpdateApplicationSummaryTable(leave_table);

                // update the leave avail days
            },
            "complete": function (response, textstatus, jqXHR) {
                $('#submitApply span').removeClass('hide').addClass('hide');

                var alert_result = 'Leave application has been submitted.';
                try {
                    alert_result = JSON.parse(response.responseText).message;
                } catch(err) {
                    console.log(err);
                }

                var title = 'Leave Application';
                if(is_apply_credit){
                    title = 'Replacement Credit Application';
                }

                BootstrapDialog.show({
                    type: BootstrapDialog.TYPE_DEFAULT,
                    title: title,
                    message: alert_result,
                    buttons: [{
                     label: 'OK',
                     action: function (dialogRef) {
                       dialogRef.close();

                       // If replacement credit is being applied
                       if(is_apply_credit){
                         // Refresh to replacement tab
                         window.location.href = '/leave/calendar/replacementLeaves';
                         return false;
                       }

                       // Refresh the page
                       window.location.href = '/leave/calendar';
                    }
                  }]
                });
            },
        });
    });

	   $('#location').change(function(event) {
	     $('.calendar').fullCalendar('refetchEvents');

       // Refresh employee option list when location changes
       var url = GenerateSelectionEmployeeRequestUrl();
       selectemployee_engine.remote.url = url;
       selectemployee_engine.prefetch.url = url;
       selectemployee_engine.initialize(true);
     });

     $('form#applyleave #selectEmployee').change(function(event) {
        $('.calendar').fullCalendar('refetchEvents');
     });

	   $('#leaveType').change(function(event) {
	     UpdateAvailDays();
       UpdateApplyButtonLabel();
	   });

	   UpdateAvailDays();

     //start/end date for creating event
     var current_date = new Date();
     current_date.setHours(0, 0, 0, 0);

    $('.form-controls.date input.field').datepicker({
       format: 'dd/mm/yyyy',
       autoclose: true

    }).on('changeDate', function (event) {
       var form = "#" + $(this).closest('form').attr('id');

       var date1 = $(form + ' input[name=sDate]').datepicker('getDate');
       var date2 = $(form + ' input[name=eDate]').datepicker('getDate');

       if (date1 > date2) {
         var newDate2 = new Date(date1);
         newDate2.setDate(newDate2.getDate());

         $(form + ' input[name=eDate]').datepicker('setDate', newDate2);
         date2 = $(form + ' input[name=eDate]').datepicker('getDate');
       }

       if (date1.getTime() == date2.getTime()) {
         $(form + ' .form-group-full-day').show();
       }
       else {
         $(form + ' input[name=fullDay][value="0"]').prop("checked", true);
         $(form + ' .form-group-full-day').hide();
       }

       UpdateApplyButtonLabel();
     }).datepicker('setDate', current_date);

     $("#applyleave input[name='fullDay']").click(function(event) {
       UpdateApplyButtonLabel();
     });

     UpdateApplyButtonLabel();

     $("#btn_decline").click(function(){
       if(!decline_row) return ;

       var data = decline_row.data();
       data['csrfmiddlewaretoken'] = getCookie('csrftoken');
       data['leave_action'] = "Decline";
       data['reason'] = $("textarea[name='decline_reason']").val();

       process_leave(data, decline_row);
     });

	   


     

     $('.leave-table-fitlering .link-export, .replacement-leave-table-fitlering .link-export').click(function(event) {
         var datarange_filter = $(this).parents('.form').find('.date-range-picker');
         var selected_dates = GetDateRangeFilterValue(datarange_filter);
         var link_export_url = $(this).attr('data-href') + '&'
        + $.param({'start_date': selected_dates[0], 'end_date': selected_dates[1]});

         $(this).prop('href', link_export_url);
     });

   });
  </script>

  </body>
</html>