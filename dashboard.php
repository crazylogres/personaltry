<?php
	session_start();
	if(!isset($_SESSION['firstname']))
	{
		header('location:login.php');
	}
?>
<html>
	<title></title>
	<body>
		<center><h4>Dashboard of <?php echo $_SESSION['firstname']; ?></h4></center>
		<div style="text-align: right;">
			<a href="/soft/index.html">Logout</a>
		</div>
	</body>
</html>