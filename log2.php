
<?php
session_start();
require 'confi.php';
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query="select * from user WHERE username='$username' AND password='$password'";
	$query_run=mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)
	{
		//valid
		$_SESSION['username']=$username;
		header('location:index.php');
	}
	else
	{ 
		//invalid
		echo '<script type="text/javascript"> alert("Invalid Credentials")</script>';
	}
}
?>

</body>
</html>