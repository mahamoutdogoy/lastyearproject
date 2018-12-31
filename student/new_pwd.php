<?php
session_start();

include('connect.php');
include('checkstud.php');
if(isset($_POST))
{
   $new_password = $_POST['pass'];
   $new_cpassword = $_POST['cpass'];

   $sql = "UPDATE studenttbl SET password='$new_password',cpassword='$new_cpassword' WHERE studid='$student_check'";

$result=mysql_query($sql);
if($result)
{
	header("location:studentprofile.php");
} 

mysql_close($con);
}
?>
