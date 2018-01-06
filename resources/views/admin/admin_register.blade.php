<!DOCTYPE html>
<html>
<head>
	<title>Admin Register</title>
</head>
<body>
	<div>
		<div>
			<h1>Admin Register</h1>
		</div>
		<div>
			<form action="/admin/register" method="POST">
				<input type="email" name="email"><br>
				<input type="text" name="firstname"><br>
				<input type="text" name="lastname"><br>
				<input type="password" name="password"><br>
				<input type="submit" name="login" value="Login">
			</form>
			<h4>Have an Account already? <a href="/admin">Login</a></h4>
		</div>
		<div>
			<h5>2018 100 Days of Code Joshua O'Ben</h5>
		</div>
	</div>
</body>
</html>