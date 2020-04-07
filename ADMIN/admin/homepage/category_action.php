<?php



$action=$_REQUEST['action'];
$category_id=$_REQUEST['category_id'];


$category_name=$_REQUEST['category_name'];


print_r($_REQUEST);

switch ($action) {
	case 'insert':
		
		$ins="insert into `category` (`category_name`)values('".$category_name."')";
		$qry=mysqli_query($con,$ins);

		if ($qry)
		{
			echo "Insert Okok";
			header("location:index.php?page=category_list");
		}else
		{
			echo "Not Inserted";
		}
		break;

		default:
		echo "Error";
		break;
	}
