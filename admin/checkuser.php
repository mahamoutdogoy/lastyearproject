<?php
//session_start();// Starting Session
include("connect.php");
$user_check= $_SESSION["userid"];// Storing Session
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select * from usertbl where uid = '$user_check'");
//echo $user_check;
$row = mysql_fetch_assoc($ses_sql);
$my_id=$row['uid'];
$my_fname =$row['fname'];
$my_lname =$row['lname'];
$my_gender =$row['gender'];
$my_blood =$row['blood'];
$my_mobile=$row['mobile'];
$my_email =$row['email'];
$my_address=$row['address'];
$my_department=$row['deptname'];
$my_birthdate=$row['dob'];
$my_file=$row['file'];
$my_category=$row['catname'];
if(!isset($my_fname)){
mysql_close($con); // Closing Connection
//header('Location: usertbl.php'); // Redirecting To Home Page
}
?>
