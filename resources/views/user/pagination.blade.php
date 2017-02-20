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
        <title>Kakitangan.com: Pagination</title>

<style>
/*special for pagination class*/
/*Pagination start*/
.pagination li {
    display: inline;
    float: left;
}
/*for others page (non-active)*/
.pagination li a {
    background: #ddd;
    padding-right: 10px;
    padding-left: 10px; 
    text-decoration: none;
}
/*Current page (active)*/
li.active span {
    background: #ccc;
    color: blue;
    padding-right: 10px;
    padding-left: 10px; 
    text-decoration: none;
}
li.disabled span {
    background: gray;
    padding-right: 10px;
    padding-left: 10px; 
    text-decoration: none;
}
/*Pagination End*/
html, body {
    width: 60em;
    margin: 0 auto;
    margin-left: 10em;
}
table {
    border-collapse: collapse;
    text-align: center;
    width:40em;
    font-size: 1.3em;
}
table tr>td, tr>th {
    border:1px solid #ddd;
    padding: 0.2em;
    padding-right: 0.4em;
    padding-left: 0.4em;
}
.psize {
    font-size: 1.3em;
    font-family: ‘Times New Roman’, Times, serif;
    margin: 0 auto;
    padding-top: 1.5em;
}
.small {
    padding-right: 0em;
    padding-left: 0em;
}
</style>
</head>
<body>
        <h1 style="text-decoration: underline">Pagination Example</h1>
		<!-- Retrieve User data from users database -->
		<!-- Edit from info of UserController -->
        <h3><a href="{{ url('getInsert') }}"> Create User </a></h3>
        <table>
            <tr>
                <th>No</th>
                <th>Role</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Actions</th>
            </tr>

            @foreach ($users as $key => $u)
            <tr>
                <td> {{ $key + $users->firstItem() }}</td> <!-- first item to let number user auto increment -->
                <td> {{ $u->rolename }} </td>
                <td> {{ $u->name }} </td>
                <td> {{ $u->email }} </td>
                <td> {{ $u->contact_number }} </td>
                <td class="small"><a href="{{ url('getUpdate',array($u->id)) }}">Update</a> | <a href="{{ url('postDelete',[$u->id]) }}" onclick="return confirm('Confirm DELETE employee {{ $u->name }} ?')">Delete</a></td>
            </tr>
            <!-- rolename is taking from UserController that already assign roles.name at database as rolename -->
            @endforeach
        </table>
        <p class="psize">{{ $users->lastItem() }} / {{ $users->total() }} items</p>
        <hr style="margin: 0em; width:50em">
        <p>{{ $users->links() }} &nbsp; pages </p>
</body>
</html>