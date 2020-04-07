<?php

$action=$_REQUEST['action'];

@$blog_id=$_REQUEST['blog_id'];
$category_id=$_REQUEST['sub_category_idy_id'];
$subcat_id=$_REQUEST['sub_category_id'];


@$name=$_REQUEST['subcat_name'];


print_r($_REQUEST);

switch ($action) {
	case 'insert':
		
		echo $ins="insert into `blog` (`sub_category_id`,`sub_category_id`,`user_id`,`name`,`descripation`,`image`,`status`,`creatdate`)values('".$category_id."','".$sub_category_id."','".$name."')";
		$qry=mysqli_query($con,$ins);

		if ($qry)
		{
			echo "Insert Okok";
			header("location:index.php?page=blog_list");
		}else
		{
			echo "Not Inserted";
		}
		break;

		
		
		/*default:
		echo "Error";
		break;*/
	}
