<?php
/*session_start();*/
$host="localhost";
$admin="root";
$passw="";
$dba="perslogin";
$con=mysqli_connect($host,$admin,$passw) or die(mysql_error("could not connect"));
$firstname="";
$firstname_error="";
$efsm="";
$middlename="";
$middlename_error="";
$emsm="";
$lastname="";
$lastname_error="";
$elsm="";
$emailid="";
$emailid_error="";
$eemid="";
$password="";
$password_error="";
$epse="";
$registration="registration.php";
$pattern="/^[A-Z][a-z]*$/";
$patternem="/([a-z])*([a-z?(.|-|_)0-9])+@(a|g|h|i|k|l|m|o|t|u|y)*\w.(c|o|m)/";
$patternpas="/([a-z])*.([A-Z.*(?=(0-9))a-z])*/";
if(isset($_POST['register']))
{
	if(($_POST['firstname'] == "") || ($_POST['middlename'] == "") || ($_POST['lastname'] == "") ||  ($_POST['emailid'] == "") ||  ($_POST['password'] == ""))
	{
		header("Location:".$registration);
	}
	elseif ((!preg_match($pattern, $_POST['firstname'])) && (!preg_match($pattern, $_POST['middlename'])) && (!preg_match($pattern, $_POST['lastname'])))
	 {
		$firstname_error=$_POST['firstname']." must be like Mike";
		$efsm=$firstname_error;
		$middlename_error=$_POST['middlename']." must be like Mike";
		$emsm=$middlename_error;
		$lastname_error=$_POST['lastname']." must be like Mike";
		$elsm=$lastname_error;
	}
	else
	{
		$firstname=$_POST['firstname'];
		$middlename=$_POST['middlename'];
		$lastname=$_POST['lastname'];
	}
	if($_POST['emailid'] == "" || $_POST['password'] == "")
	{
		header("Location:".$registration);
	}
	elseif((!preg_match($patternem, $_POST['emailid'])) &&  (!preg_match($patternpas, $_POST['password'])))
	{
		$emailid_error=$_POST['emailid']." must be mike.lama1213@gmail.com";
		$eemid=$emailid_error;
		$password_error=$_POST['password']." must be Mikekhelan123";
		$epse=$password_error;
	}
	else
	{
		$emailid=$_POST['emailid'];
		$password=$_POST['password'];
	}
}
?>
<html>
	<head></head>
	<body>
		<form action="registration.php" method="POST">
			<label>First Name:</label>
			<input type="text" size="20" placeholder="firstname" name="firstname">
			<span>
				<?php 
					if($efsm)
					{
						echo $firstname_error;
					}
					else
					{
						echo $firstname;
					}
				?>
			</span><br>
			<label>Middle Name:</label>
			<input type="text" size="20" placeholder="middlename" name="middlename">
			<span><?php 
			if($emsm){
				echo $middlename_error;}
			else
			{
				echo $middlename;
			}
			?></span><br>
			<label>Last Name:</label>
			<input type="text" size="20" placeholder="lastname" name="lastname">
			<span><?php
			if($elsm){
				echo $lastname_error;}
			else
			{
				echo $lastname;
			}
			?></span><br>
			<label>Email Address:</label>
			<input type="email" size="20" placeholder="email" name="emailid">
			<span><?php 
			if($eemid){
				echo $emailid_error;}
			else
			{
				echo $emailid;
			}
			?></span><br>
			<label>Password:</label>
			<input type="password" size="20" placeholder="password" name="password">
			<span><?php
				if($epse)
				{
					echo $password_error;
				}
				else
				{
					echo $password;
				}
			?></span><br> 
			<input type="submit" value="register" name="register">
		</form>
	</body>
</html>