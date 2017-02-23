<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" type="image/x-icon" href="http://www.expertphp.in/images/favicon.ico" />
        <title> 
                Laravel AJAX Pagination with JQuery 
                </title>
    <meta name="description"  content="laravel ajax pagination with jquery demo,laravel pagination json demo,ajax pagination in laravel 5 demo,laravel 5 custom pagination demo.">
    <meta name="keywords" content="laravel ajax pagination with jquery demo,laravel pagination json demo,ajax pagination in laravel 5 demo,laravel 5 custom pagination demo.">

    <link href="http://demo.expertphp.in/css/style.css" rel="stylesheet">

     <link rel="stylesheet" href="http://www.expertphp.in/css/bootstrap.css" type="text/css" media="all" />
 <link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
 
    <script src="http://demo.expertphp.in/js/jquery.js"></script>
    <script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body  style="background: #e1e1e1;">
 <div class="header">
    <a href="http://demo.expertphp.in">
        <img src="http://www.expertphp.in/images/logo.png" alt="logo">
        <strong>ExpertPHP.in <span class="demoh">Demo</span></strong>
    </a>
</div>

<div style="padding:20px;">
<br/>
<br/>

<div class="demo-head">
    <h1 class="post-title"> Demo - Laravel AJAX Pagination with JQuery  </h1>
    <a href="http://www.expertphp.in/article/laravel-5-ajax-pagination-with-jquery-example" class="btn btn-primary" style="border-radius:0px !important" target="_blank"> View Post</a>
</div>
<div style="text-align:center">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- first ads -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-5956923966420028"
     data-ad-slot="4990946392"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<hr>


<div class="container">

    
   <div class="row"> 
<div class="col-md-8">
    
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel AJAX Pagination with JQuery</h2>
            </div>
         
        </div>
    </div>
<div id="product_container">
       @include('presult')
</div>
<script>
 $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            }else{
                getData(page);
            }
        }
    });
$(document).ready(function()
{
     $(document).on('click', '.pagination a',function(event)
    {
        $('li').removeClass('active');
        $(this).parent('li').addClass('active');
        event.preventDefault();
        var myurl = $(this).attr('href');
       var page=$(this).attr('href').split('page=')[1];
       getData(page);
    });
});
function getData(page){
        $.ajax(
        {
            url: '?page=' + page,
            type: "get",
            datatype: "html",
            // beforeSend: function()
            // {
            //     you can show your loader 
            // }
        })
        .done(function(data)
        {
            console.log(data);
            
            $("#product_container").empty().html(data);
            location.hash = page;
        })
        .fail(function(jqXHR, ajaxOptions, thrownError)
        {
              alert('No response from server');
        });
}
  </script>

  </div>

</div>
</div>
 


</div>

<hr/>
<script type="text/javascript"  src="http://www.expertphp.in/js/jquery/jquery.min.js "></script>
 <script type="text/javascript"  src="http://www.expertphp.in/js/bootstrap.js "></script>
</body>
</html>
  </body>
  </html>