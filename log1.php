<?php
$con=mysqli_connect('localhost','root','') or die("Unable to connect");
mysqli_select_db($con,"logindb");
?>
<?php
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    if($password==$cpassword)
    {
		$query="select * from user WHERE username='$username' "; 
        $query_run = mysqli_query($con,$query);

        if(mysqli_num_rows($query_run)>0)
        {
			echo '<script type="text/javascript"> alert("User already exists..try another username")</script>';
        }
		else
        {
			$query="insert into user values('$username','$password')";
			$query_run=mysqli_query($con,$query);
			
			if($query_run)
			{
				echo '<script type="text/javascript"> alert("User Registered..Go to login page" )</script>';
			}
			else
			{
			echo '<script type="text/javascript"> alert("Error!")</script>';
			}
		}
    }
	else
	{
		echo '<script type="text/javascript"> alert("Passwords do not match,try again!")</script>';
	}
}
?>
