<?php



$action=$_REQUEST['action'];
$admin_id=$_REQUEST['admin_id'];


$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$gender=$_REQUEST['gender'];
$contact=$_REQUEST['contact'];
$profile=$_FILES['profile']['name'];
$tmp_name=$_FILES['profile']['tmp_name'];


print_r($_REQUEST);

switch ($action) {
	case 'insert':

		move_uploaded_file($tmp_name, "upload/admin/".$profile);
		
		$ins="insert into `admin` (`name`,`email`,`password`,`gender`,`contact`,`profile`)values('".$name."','".$email."','".$password."','".$gender."','".$contact."','".$profile."')";
		$qry=mysqli_query($con,$ins);

		if ($qry)
		{
			echo "Insert Okok";
			header("location:index.php?page=admin_list");
		}
		else
		{
			echo "Not Inserted";
		}

		case 'update':
			$update="update `admin` set `name`='".$name."',`email`='".$email."',`password`='".$password."',`gender`='".$gender."',`contact`='".$contact."',`profile`='".$profile."' where admin_id='".$admin_id."'";
			$qry=mysqli_query($con,$update);

			if ($qry)
			 {
				echo "Data Updated";
			header("location:index.php?page=admin_list");
				
			}else
			{
				echo "Data Not Updated";
			}
			break;

		case 'delete':
		$admin_id = $_REQUEST['admin_id'];
		$del="delete from `admin` where admin_id='".$admin_id."'";
		$qry=mysqli_query($con,$del);
		if ($qry)
		 {
			echo "Data Deleted";
			//$_SESSION['del_msg']="Data Deleted Succesfully..!!";
			header("location:index.php?page=admin_list");
		}
		else{
			echo "Data Not Deleted";

		}			
		break;
	
	default:
		echo "Error";
		break;
}
echo "Today is " . date("Y/m/d") . "<br>";



?>