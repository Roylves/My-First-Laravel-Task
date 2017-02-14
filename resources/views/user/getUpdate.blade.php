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

<style>
html, body {
	width:600px;
	margin: 0 auto;
	padding: 10px;
}
.container{
	background: #ddd;
	box-shadow: 0px 0px 10px grey;
	padding: 10px;
}
</style>

</head>
<body>
		<div class="container">
		<h1>New users</h1>
		<hr>
			<form method="POST" action="{{ url('postUpdate',array($user->id)) }}">
              			{{ csrf_field() }}				
              <table>
					<tr>
						<td>Name</td>
						<td>
							<input name="name" id="name" type="text" value="{{ $user->name }}" />
						</td>
					</tr>

					<tr>
						<td>Email</td>
						<td>
							<input name="email" id="email" type="email" value="{{ $user->email }}" />
						</td>
					</tr>

					<tr>
						<td>Role</td>
						<td>
							<select name="role_id" id="role_id">
							@foreach($roles as $role)
								<option value="{{ $role->id }}" {{ $user->role_id==$role->id? 'selected':null }} >
									{{ $role->name }}
								</option>
							@endforeach
							</select>
						</td>
					</tr>
				</table>

						<hr>
						<button type="submit" class="btn btn-primary">
                                    Register
                        </button>
			</form>
		</div>
</body>
</html>