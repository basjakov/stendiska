<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="/addgirl" enctype="multipart/form-data">
	{{ csrf_field() }}
	<input type="text" name="name" placeholder="name"></br>
	<input type="text" name="lastname" placeholder="last name"></br>
	<input type="number" name="age" placeholder="age"></br>
	<input type="number" name="height" placeholder="height"></br>
	<input type="number" name="weight" placeholder="weight"></br>
	<input type="text" name="university" placeholder="university"></br>
	<input type="text" name="specification" placeholder="specification"></br>
	<input type="text" name="workingtime" placeholder="workingtime"></br>
	<input type="file" name="file" id="file">
	<input type="submit" value="create">
</form>
</body>
</html>