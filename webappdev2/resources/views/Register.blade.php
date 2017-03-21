<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body class="bgcolor">
<div class="body">

	<div class="header">
		Register!
	</div>

<form method="post" action="RunRegister">
{{csrf_field()}}

<table class="table">
	<tr>
		<td>
			first name:<td><input type="text" name="first_name"></td>
		</td>
	</tr>
	<tr>
		<td>
			last name:<td><input type="text" name="last_name"></td>
		</td>
	</tr>
	<tr>
			<td>
			middle initial:<td><input type="text" name="middle_initial"></td>
		</td>
	</tr>
	<td>
			student id:<td><input type="text" name="student_id"></td>
		</td>
	</tr>
	<tr>
	<td>
			course:<td><input type="text" name="course"></td>
		</td>
	</tr>
	<tr>
	<td>
			address:<td><input type="text" name="address"></td>
		</td>
		</tr>
		<tr>
	<td>
			guardian:<td><input type="text" name="guardian"></td>
		</td>
	
	</tr>
</table>



<button class="button">Register</button>
</form>
</div>
</body>
</html>

<style type="text/css">
	.body{
	font-family: arial;
	max-width: 1750px;
	max-height: 763px;
	margin: -7px;

}

	.bgcolor{
		background-color:#525e54;
	}
.table{
	background-color: #525e54;
	margin-top: 10%;
	margin-left: 35%;
	padding:20px;
	text-align: center;
	border-spacing: 10px;
	font-size: 14px;
	color: #FFFFFF;
	border-style: solid;
	border-color: #000000;
	}
	.header{
	font-size: 65px;
	text-align: center;
	background-color: #4a514b;
	color: #FFFFFF;
	box-shadow: 0 1px 1.5px 0 rgba(0, 0, 0, 0.12), 0 1px 1px 0 rgba(0, 0, 0, 0.24);
}

.button{
margin-left: 530px;
margin-top: 50px;
width: 200px;
height: 100px;
background-color: #4a514b;
color: #ffffff;
border-style: none;
box-shadow: 0 1px 1.5px 0 rgba(0, 0, 0, 0.12), 0 1px 1px 0 rgba(0, 0, 0, 0.24);
</style>