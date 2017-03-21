<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body class="bgcolor">
<div class="body">
	<div class="header">
		Update!
	</div>
<form method="post" action="/RunUpdate">
{{csrf_field()}}
<table class="table">
<tr>
	<td>
	<input type="hidden" name="id" value="{{$students->id}}">
	</td>
</tr>
<tr>
	<td>
<input type="hidden" name="student_id" value="{{$students->student_id}}">
	</td>
</tr>
<tr>
	<td>
first name:</td><td><input type="text" name="first_name" value="{{$students->first_name}}"></td>
	</td>
</tr>
<tr>
	<td>
last name:</td><td><input type="text" name="last_name" value="{{$students->last_name}}"></td>
	</td>
</tr>
<tr>
	<td>
middle initial:</td><td><input type="text" name="middle_initial" value="{{$students->middle_initial}}"></td>
	</td>
</tr>
<tr>
	<td>
course:</td><td><input type="text" name="course" value="{{$students->course}}"></td>
	</td>
</tr>
<tr>
	<td>
address:</td><td><input type="text" name="address" value="{{$students->address}}"></td>
	</td>
</tr>
<tr>
	<td>
guardian:</td><td><input type="text" name="guardian" value="{{$students->guardian}}"></td>
	</td>
</tr>
</table>

<button class="button">Update</button>
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