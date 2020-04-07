<?php

unset($_SESSION['admin_id']);
if ($_SESSION['admin_id']=="")
 {
	header("location:login.php");
}


?>