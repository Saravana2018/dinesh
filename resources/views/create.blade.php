<!DOCTYPE html>
<html>
<head>
	
</head>  
<body>
	@if($errors->any())
	<ul>
	{!!implode('',$errors->all('<li>:message</li>'))!!} 
	</ul>
	@endif

<form action="create" method="post">
	@csrf
first: <input type="text" name="fname" value="{{old('fname')}}"

><br>
lastname: <input type="text" name="lname" value="{{old('lname')}}"

><br>
email: <input type="text" name="email" value="{{old('email')}}"

><br>
gender: <input type="text" name="gender" value="{{old('gender')}}"

><br>
<input type="submit">
</form>

 </body>
</html>