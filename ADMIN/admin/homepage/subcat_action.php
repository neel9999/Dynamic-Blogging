<?php

$action=$_REQUEST['action'];
$category_id=$_REQUEST['category_id'];
$sub_category_id=$_REQUEST['sub_category_id'];

$name=$_REQUEST['name'];

print_r($_REQUEST);

switch ($action) {
	case 'insert':
		
		$ins="insert into `sub_category` (`category_id`,`name`)values('".$category_id."','".$name."')";
		$qry=mysqli_query($con,$ins);

		if ($qry)
		{
			echo "Insert Okok";
			header("location:index.php?page=sub_category_list");
		}else
		{
			echo "Not Inserted";
		}
		break;

		default:
		echo "Error";
		break;
	}
