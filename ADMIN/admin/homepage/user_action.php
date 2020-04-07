<?php


$action=$_REQUEST['action'];
$user_id=$_REQUEST['user_id'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$gender=$_REQUEST['gender'];
$contact=$_REQUEST['contact'];

print_r($_REQUEST);

switch ($action) {
    case 'insert':
        
        $ins="insert into `user` (`user_id`,`name`,`email`,`password`,`gender`,`contact`)values('".$user_id."','".$name."','".$email."','".$password."','".$gender."','".$contact."')";
        $qry=mysqli_query($con,$ins);

        if ($qry)
         {
            echo "Insert Okok"; 
        }else
        {
            echo "Not Inserted";
        }
        break;
    
    default:
        echo "Error";
        break;
}



?>