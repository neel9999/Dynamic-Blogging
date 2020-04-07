<?php

$email=$_REQUEST['email'];
$password=$_REQUEST['password'];


print_r($_REQUEST);

$sel="select * from `admin` where `email`='".$email."' AND `password`='".$password."'";
$qry=mysqli_query($con,$sel);
$count=mysqli_num_rows($qry);

//echo $count;

if ($count>0)
 {
 	$row=mysqli_fetch_assoc($qry);
 	echo $_SESSION['admin_id']=$row['admin_id'];
 	header("location:index.php");

	echo "Login OKOK";
}else
{
	echo "Login Not";
	$_SESSION['Login']="Your Email And Password are Not Match..!!";
}



?>