<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Contact Page</h1>
	<form action="{{route('contact')}}" method="post">
		@csrf
		<input type="text" name="name" placeholder="Enter your name">
		<input type="email" name="email" placeholder="Enter your mail">
		<input type="text" name="message" placeholder="Enter your message">
		<input type="submit" value="submit">
		
	</form>
</body>
</html>