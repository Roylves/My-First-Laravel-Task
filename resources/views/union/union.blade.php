<!DOCTYPE html>
<html>
    
    
<!-- Mirrored from kakitangan.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2017 10:36:04 GMT -->
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
        <title>Kakitangan.com: Union</title>

</head>
<body>
		<!-- Retrieve data from database -->
		<!-- Edit from info of UserController -->
        <table>
            @foreach ($union as $u)
                <tr><td>{{ $u->name }}</td></tr>
            <!-- rolename is taking from UserController that already assign roles.name at database as rolename -->
            @endforeach
        </table>


</body>
</html>