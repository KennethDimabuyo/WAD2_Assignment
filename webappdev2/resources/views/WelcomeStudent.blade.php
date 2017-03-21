<!DOCTYPE html>
<html>
<head>
	<title>WelcomeStudent</title>

</head>
<body class="bgcolor" >

<div class="body">
	<div class="header">
	</div>


<table class="table">
	<tr>
		<td class="colcolor">

			Student ID</td>
			<td class="colcolor">
			First Name</td>
				<td class="colcolor">
			Last Name</td>
				<td class="colcolor">
			Middle Initial</td>
				<td class="colcolor">
			Course
		</td>
				<td class="colcolor">
			Address</td>
				<td class="colcolor">Guardian</td>
				<td class="colcolor">
			Update</td>
			<td class="colcolor">
			Delete</td>

	</tr>
	@foreach($students as $student) 
		<tr>
		<td hidden>
			{{$student->id}}
		</td>
		<td>
			{{$student->student_id}}
		</td>
		<td>
			{{$student->first_name}}
		</td>
				<td>
			{{$student->last_name}}
		</td>
				<td>
			{{$student->middle_initial}}
		</td>
				
				<td>
			{{$student->course}}
		</td>
				<td>
			{{$student->address}}
		</td>
				<td>
			{{ $student->guardian}}
				<td hidden="">
			{{$student->deleted_at}}
		</td>


	<td>
	<div>
	<a href="/Update/{{$student->id}}">
		<button>Update</button>
	</a>
	</td>

	<td>
	<a href="/RunDelete/{{$student->id}}">	
		<button>Delete</button>
	</a>
	</td>
	@endforeach		
</table>
	 


	<form method="post" action="Register">
	{{csrf_field()}}
		<button class="button">Register</button>
	</form>
	 

	 


</div>
</body>
</html>

<style type="text/css">
	
	.colcolor{
		background-color:#4a514b;
		padding: 5px;
	}
	.bgcolor{
		background-color:#525e54;
	}
.body{
	font-family: arial;
	max-width: 1750px;
	max-height: 763px;
	margin: -7px;


	

}

.header{
	font-size: 65px;
	text-align: center;
	background-color: #4a514b;
	color: #FFFFFF;
	box-shadow: 0 1px 1.5px 0 rgba(0, 0, 0, 0.12), 0 1px 1px 0 rgba(0, 0, 0, 0.24);
}
.table{
	background-color: #525e54;
	margin-top: 10%;
	margin-left: 18%;
	padding:20px;
	text-align: center;
	border-spacing: 10px;
	font-size: 14px;
	color: #FFFFFF;
	border-style: solid;
	border-color: #000000;
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