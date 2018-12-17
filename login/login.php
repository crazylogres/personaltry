<html>
	<head><title></title></head>
	<body>
		<div style="float:left">
			<h3>Login form</h3>
			<form action="validation.php" method="post">
				username:<input type="text" name="username" required><br><br>
				password:<input type="password" name="password" required><br><br>
				<input type="submit" name="login" value="login">
			</form>
		</div>
		<div style="float:right">
			<h3>Registration form</h3>
			<form action="registration.php" method="post">
				username:<input type="text" name="username" required><br><br>
				password:<input type="password" name="password" required><br><br>
				<input type="submit" name="signup" value="signup">
			</form>
		</div>
	</body>
</html>
